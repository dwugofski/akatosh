<?php
if (! isset($rootpath)) $rootpath = "dnd.akatosh.com";
if (substr($rootpath, -1) != "/" && $rootpath !== "") $rootpath = $rootpath . "/";
?>
		<span tabindex="-1" class="link<?= $chapactive?>" id="chap_link">
			<a href="<?= $rootpath?>chapters/">CHAPTERS</a>
			<div class="tooltip">
				<a href="<?= $rootpath?>chapters/01_bruma/">Bruma and Piukanda</a>
				<a href="<?= $rootpath?>chapters/02_skyrim/">Retrieving the Bal Falruhn</a>
				<a href="<?= $rootpath?>chapters/03_cheydinhal/">Chaos in Cheydinhal</a>
				<a href="<?= $rootpath?>chapters/05_leyawiin/">Leyawiin Lurkers</a>
			</div>
		</span>