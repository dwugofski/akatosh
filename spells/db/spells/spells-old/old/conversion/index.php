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
			$name = addslashes($row['name']);
			$text = addslashes($row['text']);
			$ret = $tabs."{ano: true, type: \"ano\", name: \"$name\", text: \"$text\"}";
			break;
		case 'par':
			$sql = "SELECT text FROM paragraphs WHERE attr_id = $attr_id";
			$result = runquery($conn, $sql);
			if ($result->num_rows == 0) errorfun("No paragraph found for attribute $attr_id\n");
			$row = $result->fetch_assoc();
			$text = addslashes($row['text']);
			$ret = $tabs."{par: true, type: \"par\", text: \"$text\"}";
			break;
		case 'lst':
			$sql = "SELECT id,bulleted FROM uls WHERE attr_id = $attr_id";
			$result = runquery($conn, $sql);
			if ($result->num_rows == 0) errorfun("No list found for attribute $attr_id\n");
			$row = $result->fetch_assoc();
			$lst_id = $row['id'];
			$bulleted = $row['bulleted'];
			$bulleted = $bulleted ? " bulleted: true," : "";
			$ret = $tabs."{lst: true, type: \"lst\",$bulleted items: [";
			$sql = "SELECT text FROM listitems WHERE lst_id = $lst_id";
			$result = runquery($conn, $sql);
			$prefix = "\n\t\t\t\t";
			if ($result->num_rows == 0) errorfun("No list items found for list $lst_id\n");
			while ($row = $result->fetch_assoc()){
				$text = addslashes($row['text']);
				$ret = $ret.$prefix."{text: \"$text\"}";
				$prefix = ",\n\t\t\t\t";
			}
			$ret = $ret."\n\t\t\t"."]}";
			break;
		case 'tab':
			$sql = "SELECT id FROM tbodies WHERE attr_id = $attr_id";
			$result = runquery($conn, $sql);
			if ($result->num_rows == 0) errorfun("No table found for attribute $attr_id\n");
			$row = $result->fetch_assoc();
			$tab_id = $row['id'];
			$sql = "SELECT * FROM tabitems WHERE tab_id = $tab_id";
			$result = runquery($conn, $sql);
			if ($result->num_rows == 0) errorfun("No table items found for table $tab_id\n");
			$row_i = 0;
			$ret = $tabs."{tab: true, type: \"tab\", rows: [";
			$rownum = 0;
			$rowpref = "";
			while(true && $rownum < 100){
				$sql = "SELECT * FROM tabitems WHERE rownum = $rownum AND tab_id = $tab_id";
				$result = runquery($conn, $sql);
				if ($result->num_rows == 0) break;
				$ret = $ret.$rowpref."\n\t\t\t\t{row: true, items: [";
				$prefix = "\n\t\t\t\t\t";
				while($row = $result->fetch_assoc()) {
					$centered = $row['centered'] ? " centered: true," : "";
					$heading = $row['heading'] ? " heading: true," : "";
					$text = addslashes($row['text']);
					$rownum = $row['rownum'];
					$ret = $ret.$prefix."{rownum: $rownum,$centered$heading text:\"$text\"}";
					$prefix = ",\n\t\t\t\t\t";
				}
				$ret = $ret."\n\t\t\t\t]}";
				$rownum = $rownum + 1;
				$rowpref = ",";
			}
			$ret = $ret."\n\t\t\t"."]}";
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

$name = "Summon Lesser Daedra";
$name = "Augury";
$html = "";

$sql = "SELECT name FROM spells";
$spells = runquery($conn, $sql);
while($row = $spells->fetch_assoc()) {
	savespell($row["name"], $conn);
};

function savespell($name, $conn) {
	$short_name = preg_replace('/[^a-z]/', '', strtolower($name));
	$filename = "spells/$short_name.js";
	$file = fopen($filename, 'w');
	$success = fwrite($file, renderspell($name, $conn));
	fclose($file);
	
	if ($success == false) errorfun("Failure to render spell $name");
	else echo "<p>Successfully saved spell $name</p><br/>";
}

function renderspell($name, $conn) {
	$name = addslashes($name);
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

		$name_simple = preg_replace('/[^a-z]/', '', strtolower($name));
		$html = "function $name_simple() {\n";
		$html = $html . "\tvar spell = {\n";
		$html = $html . "\t\tname: \"$name\",\n";
		$html = $html . "\t\tschool: \"$school\",\n";
		$html = $html . "\t\ttype: \"$type\",\n";
		$html = $html . "\t\tlevel: \"$level\"";	

		$sql = "SELECT id,attr_type FROM attributes WHERE spell_id = $spell_id AND attr_group = 'prop'";
		$result = runquery($conn, $sql);
		if ($result->num_rows > 0) {
			$html = $html . ",\n\t\tproperties: {attributes: [";
			$prefix = "\n\t\t\t";
			while($row = $result->fetch_assoc()){
				$html = $html . parseattribute($row['id'], $row['attr_type'], $prefix, $conn);
				$prefix = ",\n\t\t\t";
			}
			$html = $html."\n\t\t]}";
		}

		$sql = "SELECT id,attr_type FROM attributes WHERE spell_id = $spell_id AND attr_group = 'desc'";
		$result = runquery($conn, $sql);
		if ($result->num_rows > 0) {
			$html = $html.",\n\t\tdescription: {attributes: [";
			$prefix = "\n\t\t\t";
			while($row = $result->fetch_assoc()){
				$html = $html . parseattribute($row['id'], $row['attr_type'], $prefix, $conn);
				$prefix = ",\n\t\t\t";
			}
			$html = $html."\n\t\t]}";
		}

		$sql = "SELECT id,attr_type FROM attributes WHERE spell_id = $spell_id AND attr_group = 'high'";
		$result = runquery($conn, $sql);
		if ($result->num_rows > 0) {
			$html = $html.",\n\t\thigher: {attributes: [";
			$prefix = "\n\t\t\t";
			while($row = $result->fetch_assoc()){
				$html = $html . parseattribute($row['id'], $row['attr_type'], $prefix, $conn);
				$prefix = ",\n\t\t\t";
			}
			$html = $html."\n\t\t]}";
		}

		$html = $html . ",\n\t};\n\n\treturn spell;\n}";
		return $html;
	}
}

$conn->close();

?>