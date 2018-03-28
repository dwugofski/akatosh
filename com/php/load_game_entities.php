<?php
	function load_entities($ents, $mustache, $entpath, $temppath, $suffix) {
		$entfiles = [];

		if (is_array($ents) == true) {
			foreach ($ents as $entname) {
				$filename = $entpath.$entname.'.php';
				if (file_exists($filename) == true) $entfiles[] = ['file' => $filename, 'name' => $entname];
			}
		} else {
			foreach (glob($entpath."*.php") as $filename) {
				$info = pathinfo($filename);
				$entfiles[] = ['file' => $filename, 'name' => $info['filename']];
			}
		}

		foreach ($entfiles as $entfile) {
			include $entfile['file'];
			echo $mustache->render(file_get_contents($temppath), ${$entfile['name'].$suffix});
		}
	}
?>