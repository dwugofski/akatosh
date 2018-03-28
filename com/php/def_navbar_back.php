<?php
if (! isset($rootpath)) $rootpath = "dnd.akatosh.com";
if (substr($rootpath, -1) != "/" && $rootpath !== "") $rootpath = $rootpath . "/";
?>
		<span class="link<?= $backactive?>">
			<a href="<?= $rootpath?>back">BACKGROUND</a>
			<div class="tooltip">
				<a href="<?= $rootpath?>back/skyrim/">Skyrim</a>
			</div>
		</span>