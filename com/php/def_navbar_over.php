<?php
if (! isset($rootpath)) $rootpath = "dnd.akatosh.com";
if (substr($rootpath, -1) != "/" && $rootpath !== "") $rootpath = $rootpath . "/";
?>
		<span tabindex="-1" class="link<?= $overactive?>" id="over_link">
			<a href="<?=$rootpath?>">OVERVIEW</a>
			<div class="tooltip">
				<a href="<?= $rootpath?>over/index.php?section=mech">Gameplay Mechanics</a>
				<a href="<?= $rootpath?>over/index.php?section=race">Races of Tamriel</a>
				<a href="<?= $rootpath?>over/index.php?section=mag">Magical Items</a>
				<a href="<?= $rootpath?>over/index.php?section=dmd">DM Decisions</a>
			</div>
		</span>