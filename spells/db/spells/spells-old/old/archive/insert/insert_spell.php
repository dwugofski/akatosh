<?php

function errorfun($msg) {
	die($msg);
}

function runquery($c, $q){
	if ($c->query($q) == FALSE) errorfun("Error running query: \n$q" . $c->error);
	return $c->insert_id;
}

function properfix($string){
	return mysql_real_escape_string($string);
}

function insertattr($conn, $attribute, $group, $spell_id){
	$type = $attribute->type;
	if (in_array($type, array("ano", "lst", "par", "tab")) == false || $type === null) errorfun("Type '$type' not recognized.\n");
	$attr_id = runquery($conn, "INSERT INTO attributes (spell_id, attr_group, attr_type) VALUES ($spell_id, '$group', '$type')");
	switch($type){
		case 'ano':
			$name = properfix($attribute->name);
			$text = properfix($attribute->text);
			if ($text === null || $name === null) errorfun("Name: '$name' and/or text: '$text' null for annotation attribute '$attr_id'.\n");
			runquery($conn, "INSERT INTO annotations (attr_id, name, text) VALUES ($attr_id, '$name', '$text')");
			break;
		case 'lst':
			$bulleted = ($attribute->bulleted === true) ? 1 : 0;
			$items = $attribute->items;
			if ($items === null) errorfun("List for attribute '$attr_id' contains no items.\n");
			$lst_id = runquery($conn, "INSERT INTO uls (attr_id, bulleted) VALUES ($attr_id, $bulleted)");
			foreach ($items as $item) {
				$text = properfix($item->text);
				if ($text === null) errorfun("Text: '$text' null for list item from attribute '$attr_id', list '$lst_id'.\n");
				runquery($conn, "INSERT INTO listitems (lst_id, text) VALUES ($lst_id, '$text')");
			}
			break;
		case 'par':
			$text = properfix($attribute->text);
			if ($text === null) errorfun("Text: '$text' null for paragraph from attribute '$attr_id'.\n");
			runquery($conn, "INSERT INTO paragraphs (attr_id, text) VALUES ($attr_id, '$text')");
			break;
		case 'tab':
			$items = $attribute->items;
			if ($items === null) errorfun("Table for attribute '$attr_id' contains no items.\n");
			$tab_id = runquery($conn, "INSERT INTO tbodies (attr_id) VALUES ($attr_id)");
			foreach ($items as $item) {
				$text = properfix($item->text);
				$rownum = intval($item->rownum);
				$heading = ($item->heading === true) ? 1 : 0;
				$centered = ($item->centered === true) ? 1 : 0;
				if ($text === null || $rownum === null) errorfun("Text: '$text' and/or rownum: '$rownum' null for table item from attribute '$attr_id', list '$lst_id'.\n");
				runquery($conn, "INSERT INTO tabitems (tab_id, rownum, centered, heading, text) VALUES ($tab_id, $rownum, $centered, $heading, '$text')");
			}
			break;
		default:
			errorfun("Do not know how to handle type '$type' for attribute '$attr_id'\n");
	}
}

$servername = "localhost";
$username = "dm";
$password = "akatosh";
$dbname = "dnd_spells";

$link = mysql_connect($servername, $username, $password)
    OR errorfun(mysql_error());
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) errorfun("Connection failed: ". $conn->connect_error."\n");
else echo "CONNECTION ESTABLISHED\n";

$spell = json_decode(($_POST['spell']));

$name = properfix($spell->name);
$school = properfix(strtolower($spell->school));
$type = properfix($spell->type);
$level = properfix($spell->level);

$sql = "SELECT * FROM spells WHERE name = '$name'";
$result = $conn->query($sql);
if ($conn->error == TRUE) errorfun("Error querying for $name: ".$conn->error."\n");

if($result->num_rows > 0) errorfun("Spell '$name' was already found in database.\n");
echo "Adding '$name' to database.\n";
$spell_id = runquery($conn, "INSERT INTO spells (name, school, type, level) VALUES ('$name', '$school', '$type', $level)");

$properties = $spell->properties;
if ($properties === null) errorfun("No properties found for spell '$name'.\n");
$attributes = $properties->attributes;
if ($attributes === null) errorfun("No attributes for properties found for spell '$name'.\n");
foreach($attributes as $attribute) insertattr($conn, $attribute, "prop", $spell_id);

$description = $spell->description;
if ($description === null) errorfun("No description found for spell '$name'.\n");
$attributes = $description->attributes;
if ($attributes === null) errorfun("No attributes for description found for spell '$name'.\n");
foreach($attributes as $attribute) insertattr($conn, $attribute, "desc", $spell_id);

$higher = $spell->higher;
if ($higher !== null) {
	$attributes = $higher->attributes;
	if ($attributes === null) errorfun("No attributes for higher found for spell '$name'.\n");
	foreach($attributes as $attribute) insertattr($conn, $attribute, "high", $spell_id);
}

echo "'$name' was successfully entered\n";

$conn->close();

?>