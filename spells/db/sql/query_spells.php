<?php

function spell_basics_by_class($classname) {
	$classname = strtolower($classname);
	$sql = "SELECT * FROM spell_basics WHERE $classname = TRUE ORDER BY level ASC, sname ASC";
	return query_rows('dnd_spells', $sql);
}

function spell_basics_by_level($level) {
	$level = strtolower($level);
	$sql = "SELECT * FROM spell_basics WHERE level = '$level' ORDER BY name ASC";
	return query_rows('dnd_spells', $sql);
}

?>