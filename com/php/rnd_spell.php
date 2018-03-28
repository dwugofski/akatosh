<?php
	include "../spells/sql/query_spells.php";

	$class = $_POST['class'];
	$level = $_POST['level'];

	$class_spells = spell_basics_by_class($class);
	$spells = array_filter($class_spells, function($spell) use ($level) {
		return spell_filter_level($spell, $level);
	});

	$json_response = json_encode($spells);
	echo $json_response;
?>