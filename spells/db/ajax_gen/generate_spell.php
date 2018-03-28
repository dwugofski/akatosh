<?php
	
	$spellpath = "../spells/";
	include "../list_spells.php";

	require '../../../com/php/mustache/src/Mustache/Autoloader.php';
	Mustache_Autoloader::register();
	$mustache = new Mustache_Engine;

	$response = ['error' => FALSE, 'html' => ''];

	if (isset($_POST['spell'])) {
		$desired = $_POST['spell'];
		$found = FALSE;
		foreach ($spellnames as $spellname) {
			if ($spellname['id'] == $desired) {
				$found = true;
				break;
			}
		}

		if ($found) $response['html'] = $mustache->render(file_get_contents("../spell_template.html"), ${$desired."_spell"});
		else $response['error'] = 'Spell not found';
	} else $response['error'] = 'No spell defined';

	$json_response = json_encode($response);
	echo $json_response;

?>