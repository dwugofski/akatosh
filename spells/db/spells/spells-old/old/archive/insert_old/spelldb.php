<?php

function runquery($c, $q){
	if ($c->query($q) == FALSE) die("Error running query: \n$q" . $c->error);
	return $c->insert_id;
}

function properfix($string){
	return mysql_real_escape_string($string);
}

$servername = "localhost";
$username = "dm";
$password = "akatosh";
$dbname = "dnd_spells";

$link = mysql_connect($servername, $username, $password)
    OR die(mysql_error());
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: ". $conn->connect_error);
else echo "CONNECTION ESTABLISHED\n";

$name = properfix($_POST['name']);
$school = properfix(strtolower($_POST['school']));
$ritual = properfix($_POST['type']);
$level = properfix($_POST['level']);
$propnum = $_POST['propnum'];
$descnum = $_POST['descnum'];
$highnum = $_POST['highnum'];

$sql = "SELECT * FROM spells WHERE name = '$name'";
$result = $conn->query($sql);
if ($conn->error == TRUE) die("Error querying for $name: ".$conn->error);

if ($result->num_rows == 0) {
	echo "Adding $name to spells\n";

	$sql = "INSERT INTO spells (name, school, type, level) VALUES ('$name', '$school', '$ritual', $level)";
	$spell_id = runquery($conn, $sql);
	//echo "Successfully added $name\n";

	for ($i=0; $i<$propnum; $i++){
		$propn = properfix($_POST["propns_$i"]);
		$propt = properfix($_POST["propts_$i"]);
		$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'prop', 'ano')";
		$attr_id = runquery($conn, $sql);
		$sql = "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, '$propn', '$propt')";
		runquery($conn, $sql);
		//echo "Successfully inserted property $propn\n";
	}

	for ($i=0; $i<$descnum; $i++) {
		$type = $_POST["desc_proptype_$i"];
		$dashed = FALSE;
		switch($type){
			case "par":
				$par = properfix($_POST["desc_par_$i"]);
				$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'desc', 'par')";
				$attr_id = runquery($conn, $sql);
				$sql = "INSERT INTO paragraphs (attr_id, text) VALUES ($attr_id, '$par')";
				runquery($conn, $sql);
				break;
			case "lst_dashed":
				$dashed = TRUE;
			case "lst":
				$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'desc', 'lst')";
				$attr_id = runquery($conn, $sql);
				$sql = "INSERT INTO uls (attr_id, bulleted) VALUES ($attr_id, $dashed)";
				$lst_id = runquery($conn, $sql);
				$listnum = $_POST["desc_lst_lstnum_$i"];
				for ($j=0; $j<$listnum; $j++) {
					$item = properfix($_POST["desc_lst_$i"."_$j"]);
					$sql = "INSERT INTO listitems (lst_id, text) VALUES ($lst_id, '$item')";
					runquery($conn, $sql);
					//echo "Successfully inserted list item $j from list $i: $item\n";
				}
				break;
			case "tab":
				$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'desc', 'tab')";
				$attr_id = runquery($conn, $sql);
				$sql = "INSERT INTO tbodies (attr_id) VALUES ($attr_id)";
				$tab_id = runquery($conn, $sql);
				$tabnum = $_POST["desc_tab_tabnum_$i"];
				for ($j=0; $j<$tabnum; $j++){
					list($row, $heading, $centered) = explode("_", $_POST["desc_tab_$i"."_head_$j"]);
					$heading = ($heading == 1) ? 1 : 0;
					$centered = ($centered == 1) ? 1 : 0;
					$item = properfix($_POST["desc_tab_$i"."_$j"]);
					$sql = "INSERT INTO tabitems (tab_id, heading, centered, rownum, text) VALUES ($tab_id, $heading, $centered, $row, '$item')";
					runquery($conn, $sql);
					//echo "Inserting table item $j from list $i, row $row, that is $heading and $centered: $item\n";
				}
				break;
			default: echo "Do not know how to handle type $type\n";
		}
	}

	for ($i=0; $i<$highnum; $i++) {
		$type = $_POST["high_proptype_$i"];
		$dashed = FALSE;
		switch($type){
			case "par":
				$par = properfix($_POST["high_par_$i"]);
				$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'high', 'par')";
				$attr_id = runquery($conn, $sql);
				$sql = "INSERT INTO paragraphs (attr_id, text) VALUES ($attr_id, '$par')";
				runquery($conn, $sql);
				break;
			case "lst_dashed":
				$dashed = TRUE;
			case "lst":
				$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'high', 'lst')";
				$attr_id = runquery($conn, $sql);
				$sql = "INSERT INTO uls (attr_id, bulleted) VALUES ($attr_id, $dashed)";
				$lst_id = runquery($conn, $sql);
				$listnum = $_POST["high_lst_lstnum_$i"];
				for ($j=0; $j<$listnum; $j++) {
					$item = properfix($_POST["high_lst_$i"."_$j"]);
					$sql = "INSERT INTO listitems (lst_id, text) VALUES ($lst_id, '$item')";
					runquery($conn, $sql);
					//echo "Successfully inserted list item $j from list $i: $item\n";
				}
				break;
			case "tab":
				$sql = "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, 'high', 'tab')";
				$attr_id = runquery($conn, $sql);
				$sql = "INSERT INTO tbodies (attr_id) VALUES ($attr_id)";
				$tab_id = runquery($conn, $sql);
				$tabnum = $_POST["high_tab_tabnum_$i"];
				for ($j=0; $j<$tabnum; $j++){
					list($row, $heading, $centered) = explode("_", $_POST["high_tab_$i"."_head_$j"]);
					$heading = ($heading == 1) ? 1 : 0;
					$centered = ($centered == 1) ? 1 : 0;
					$item = properfix($_POST["high_tab_$i"."_$j"]);
					$sql = "INSERT INTO tabitems (tab_id, heading, centered, rownum, text) VALUES ($tab_id, $heading, $centered, $row, '$item')";
					runquery($conn, $sql);
					//echo "Inserting table item $j from list $i, row $row, that is $heading and $centered: $item\n";
				}
				break;
			default: echo "Do not know how to handle type $type\n";
		}
	}
	
	echo "Successfully entered spell '$name'\n";
} else echo "Already found spell '$name'\n";

$conn->close();

?>
