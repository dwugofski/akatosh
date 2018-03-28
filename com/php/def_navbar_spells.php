<?php
if (! isset($rootpath)) $rootpath = "dnd.akatosh.com";
if (substr($rootpath, -1) != "/" && $rootpath !== "") $rootpath = $rootpath . "/";
?>
		<span class="link<?= $spellactive?>">
			<a href="<?= $rootpath?>spells">SPELLS</a>
		</span>