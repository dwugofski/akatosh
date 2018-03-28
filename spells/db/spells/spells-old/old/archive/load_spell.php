<?php

function errorfun($msg){
	echo "<p>$msg</p>";
	exit();
}

function runquery($c, $q){
	$r = $c->query($q);
	if ($c->error == TRUE) errorfun("Error running query '$q': \n\n".$c->error);
	return $r;
}

function parseattribute($attr_id, $type, $tabs, $conn) {
	$ret = "";
	switch($type){
		case 'ano':
			$sql = "SELECT name,text FROM annotations WHERE attr_id = $attr_id";
			$result = runquery($conn, $sql);
			if ($result->num_rows == 0) errorfun("No annotation found for attribute $attr_id\n");
			$row = $result->fetch_assoc();
			$name = $row['name'];
			$text = addslashes($row['text']);
			$ret = $tabs."<prop><h4>$name</h4><p>$text</p></prop>\n";
			break;
		case 'par':
			$sql = "SELECT text FROM paragraphs WHERE attr_id = $attr_id";
			$result = runquery($conn, $sql);
			if ($result->num_rows == 0) errorfun("No paragraph found for attribute $attr_id\n");
			$row = $result->fetch_assoc();
			$text = htmlspecialchars_decode($row['text']);
			$ret = $tabs."<prop>\n$tabs\t<p>$text</p>\n$tabs</prop>\n";
			break;
		case 'lst':
			$sql = "SELECT id,bulleted FROM uls WHERE attr_id = $attr_id";
			$result = runquery($conn, $sql);
			if ($result->num_rows == 0) errorfun("No list found for attribute $attr_id\n");
			$row = $result->fetch_assoc();
			$lst_id = $row['id'];
			$bulleted = $row['bulleted'];
			$bulleted = $bulleted ? " class=\"dashed\" " : "";
			$ret = $tabs."<prop>\n$tabs\t<ul$bulleted>\n";
			$sql = "SELECT text FROM listitems WHERE lst_id = $lst_id";
			$result = runquery($conn, $sql);
			if ($result->num_rows == 0) errorfun("No list items found for list $lst_id\n");
			while ($row = $result->fetch_assoc()){
				$text = $row['text'];
				$ret = $ret.$tabs."\t\t<li>$text</li>\n";
			}
			$ret = $ret.$tabs."\t</ul>\n$tabs</prop>\n";
			break;
		case 'tab':
			$sql = "SELECT id FROM tbodies WHERE attr_id = $attr_id";
			$result = runquery($conn, $sql);
			if ($result->num_rows == 0) errorfun("No table found for attribute $attr_id\n");
			$row = $result->fetch_assoc();
			$tab_id = $row['id'];
			$sql = "SELECT text FROM tabitems WHERE tab_id = $tab_id";
			$result = runquery($conn, $sql);
			if ($result->num_rows == 0) errorfun("No table items found for table $tab_id\n");
			$row_i = 0;
			$ret = $ret.$tags."<prop>\n$tags\t<table>\n";
			while($row_i < 1000) {
				$sql = "SELECT text,centered,heading FROM tabitems WHERE tab_id = $tab_id AND rownum = $row_i";
				$result = runquery($conn, $sql);
				if ($result->num_rows == 0) break;
				$ret = $ret.$tags."\t\t<tr>\n";
				while($row = $result->fetch_assoc()) {
					$centered = $row['centered'] ? " class=\"center_al\" " : "";
					$start_tag = $row['heading'] ? "<th$centered>" : "<td$centered>";
					$end_tag = $row['heading'] ? "</th>" : "</td>";
					$text = $row['text'];
					$ret = $ret.$tags."\t\t\t$start_tag".$text."$end_tag\n";
				}
				$ret = $ret.$tags."\t\t</tr>\n";
				$row_i = $row_i + 1;
			}
			$ret = $ret.$tags."\t</table>\n$tags</prop>\n";
			break;
		default: errorfun("Unknown attribute type $type for attribute $attr_id\n");
	}
	return $ret;
}

$servername = "localhost";
$username = "dnd_player";
$password = "";
$dbname = "dnd_spells";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) errorfun("Connection failed: ". $conn->connect_error);

$name = mysql_escape_string($_POST['name']);
$html = "";

$sql = ($name === "all") ? "SELECT * FROM spells ORDER BY name" : "SELECT * FROM spells WHERE name = '$name'";
$spell_result = runquery($conn, $sql);
if ($spell_result->num_rows == 0 && $name === "all") errorfun("No spells found in database.");
if ($spell_result->num_rows > 1 && $name !== "all") errorfun("ERROR!!! Multiple matches found for $name.");
if ($spell_result->num_rows == 0 && $name !== "all") {
	$sql = "SELECT * FROM spells ORDER BY name";
	$spell_result = runquery($conn, $sql);
	if ($spell_result->num_rows == 0) errorfun("No spells in database.");
	$matched = false;
	$target_lower = preg_replace('/[^a-z]/', '', strtolower($name));
	while($row = $spell_result->fetch_assoc()) {
		$item_lower = preg_replace('/[^a-z]/', '', strtolower($row['name']));
		if ($target_lower === $item_lower) {
			$name = $row['name'];
			$matched = true;
			break;
		}
	}
	if ($matched == true) {
		$sql = "SELECT * FROM spells WHERE name = '$name'";
		$spell_result = runquery($conn, $sql);
		if ($spell_result->num_rows != 1) errorfun("ERROR!!! Thought match was found but it was not");
	} else errorfun("Could not find the spell $name");
}

while($row = $spell_result->fetch_assoc()) {
	$name = $row['name'];
	$school = $row['school'];
	$type = $row['type'];
	$level = $row['level'];
	$spell_id = $row['id'];

	$html = "<div class=\"spellblock $school\" id=\"$name\">\n";
	$html = $html."\t<div class=\"bar\"></div>\n";
	$html = $html."\t<div class=\"middle\">\n";
	$html = $html."\t\t<svg height=\"60\" width=\"40\" class=\"lvl\"><polyline points=\"0,0 0,40 20,60 40,40 40,0\"/></svg>\n";
	$html = $html."\t\t<div class=\"lvl\">$level</div>\n";
	$html = $html."\t\t<div class=\"title\">\n";
	$name = stripslashes($name);
	$html = $html."\t\t\t<h1>$name</h1>\n";
	$html = $html."\t\t\t<h2>$type</h2>\n";
	$html = $html."\t\t</div>\n";

	$sql = "SELECT id,attr_type FROM attributes WHERE spell_id = $spell_id AND attr_group = 'prop'";
	$result = runquery($conn, $sql);
	if ($result->num_rows > 0) {
		$html = $html."\t\t<div class=\"top_props\">\n";
		$html = $html."\t\t\t<svg height=\"3.5\" width=\"255\"><polyline points=\"0,0 255,1.75 0,3.5\"/></svg>\n";
		while($row = $result->fetch_assoc())
			$html = $html . parseattribute($row['id'], $row['attr_type'], "\t\t\t", $conn);
		$html = $html."\t\t</div>\n";
	}

	$sql = "SELECT id,attr_type FROM attributes WHERE spell_id = $spell_id AND attr_group = 'desc'";
	$result = runquery($conn, $sql);
	if ($result->num_rows > 0) {
		$html = $html."\t\t<div class=\"desc\">\n";
		$html = $html."\t\t\t<svg height=\"3.5\" width=\"255\"><polyline points=\"0,0 255,1.75 0,3.5\"/></svg>\n";
		while($row = $result->fetch_assoc())
			$html = $html . parseattribute($row['id'], $row['attr_type'], "\t\t\t", $conn);
		$html = $html."\t\t</div>\n";
	}

	$sql = "SELECT id,attr_type FROM attributes WHERE spell_id = $spell_id AND attr_group = 'high'";
	$result = runquery($conn, $sql);
	if ($result->num_rows > 0) {
		$html = $html."\t\t<div class=\"highlv\">\n";
		$html = $html."\t\t\t<h3>At Higher Levels</h3>\n";
		while($row = $result->fetch_assoc())
			$html = $html . parseattribute($row['id'], $row['attr_type'], "\t\t\t", $conn);
		$html = $html."\t\t</div>\n";
	}

	$html = $html."\t</div>\n";
	$html = $html."\t<div class=\"bar\"></div>\n";
	$html = $html."\n</div>\n";
	echo $html;
}

$conn->close();

?>