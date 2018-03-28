<?php

	$spellnames = [];
	foreach(glob($spellpath.'*.php') as $filename){
		$short = basename($filename, ".php");
		include $filename;
		$spellnames[] = [ 'id' => $short, 'name' => ${$short.'_spell'}['name'] ];
	}

?>