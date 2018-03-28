<?php
	function load_spells($spells, $mustache, $spellpath) {
		$spellfiles = [];

		if (is_array($spells) == true) {
			foreach ($spells as $spellname) {
				$filename = $spellpath.$spellname.'.php';
				if (file_exists($filename) == true) $spellfiles[] = ['file' => $filename, 'name' => $spellname];
			}
		} else {
			foreach (glob($spellpath."*.php") as $filename) {
				$info = pathinfo($filename);
				$spellfiles[] = ['file' => $filename, 'name' => $info['filename']];
			}
		}

		foreach ($spellfiles as $spellfile) {
			include $spellfile['file'];
			echo $mustache->render(file_get_contents($spellpath.'../spell_template.html'), ${$spellfile['name'].'_spell'});
		}
	}
?>