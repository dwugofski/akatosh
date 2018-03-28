<?php

	$spellpath = 'spells/';
	include 'list_spells.php';

	$substr = $_GET['q'];
	$spellmatches = [];
	foreach ($spellnames as $spellname) {
		if (stripos($spellname['name'], $substr) !== false) $spellmatches[] = $spellname;
	}

	$json_response = json_encode($spellmatches);
	echo $json_response;

?>