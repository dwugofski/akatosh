<?php
if (! isset($rootpath)) $rootpath = "dnd.akatosh.com";
if (substr($rootpath, -1) != "/" && $rootpath !== "") $rootpath = $rootpath . "/";
?>
		<span class="link<?= $creatactive?>">
			<a href="<?= $rootpath?>creatures">CREATURES</a>
		</span>