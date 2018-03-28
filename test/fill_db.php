<?php
	include "../spells/db/spell_db.php";
	include "../com/php/con_check.php";

	if (!con_check()) die("ERROR: Must be connecting from Kenseri");

	function db_spell_cmp($a, $b){
		return strcmp($a['name'], $b['name']);
	}
	usort($spell_db, "db_spell_cmp");

	$servername = "localhost";
	$username = "dm";
	$password = "akatosh";
	$dbname = "dnd_spells";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: ". $conn->connect_error);
	}

	if ($conn->query("DELETE FROM spell_basics") == FALSE) die("\tError emptying table: " . $conn->error);
	if ($conn->query("ALTER TABLE spell_basics AUTO_INCREMENT = 1") == FALSE) die("\tError setting autoincrement: " . $conn->error);

	foreach ($spell_db as $spell) {
		$name = mysqli_real_escape_string($conn, $spell['name']);
		$sname = mysqli_real_escape_string($conn, $spell['sname']);
		$level = strtolower($spell['level']);
		$school = strtolower($spell['school']);
		$bard = in_array("bard", $spell['classes']);
		$cleric = in_array("cleric", $spell['classes']);
		$druid = in_array("druid", $spell['classes']);
		$paladin = in_array("paladin", $spell['classes']);
		$ranger = in_array("ranger", $spell['classes']);
		$sorcerer = in_array("sorcerer", $spell['classes']);
		$warlock = in_array("warlock", $spell['classes']);
		$wizard = in_array("wizard", $spell['classes']);

		echo "Adding spell '$name' to database...\n";

		$sql = "INSERT INTO spell_basics (sname, name, level, school, bard, cleric, druid, paladin, ranger, sorcerer, warlock, wizard) VALUES  ('$sname', '$name', '$level', '$school', '$bard', '$cleric', '$druid', '$paladin', '$ranger', '$sorcerer', '$warlock', '$wizard')";

		if ($conn->query($sql) == FALSE) die("\tError inserting $name: " . $conn->error);
		else echo "\tSuccessfully entered $name\n";
	}

	$conn->close();
?>