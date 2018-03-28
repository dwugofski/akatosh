<?php
if (! isset($rootpath)) $rootpath = "dnd.akatosh.com";
if (substr($rootpath, -1) != "/" && $rootpath !== "") $rootpath = $rootpath . "/";
?>
		<span tabindex="-1" class="link<?= $charaactive?>" id="char_link">
			<a href="<?= $rootpath?>characters/">CHARACTERS</a>
			<div class="tooltip">
				<a href="<?= $rootpath?>characters/index.php?char=karaggroelimack">Karag Gro-Elimack</a>
				<a href="<?= $rootpath?>characters/index.php?char=kelei">Kel-Ei</a>
				<a href="<?= $rootpath?>characters/index.php?char=miraandarys">Mira Andarys</a>
				<a href="<?= $rootpath?>characters/index.php?char=qazahtadar">Qa&rsquo;Zahta-Dar</a>
				<a href="<?= $rootpath?>characters/index.php?char=zala">Zala</a>
			</div>
		</span>