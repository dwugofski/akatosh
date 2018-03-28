<?php

function generate_linkblocks($links) {
?>
			<div class="link_chunk">
<?php
	foreach ($links as $link) {
		generate_linkblock($link);
	}
?>
			</div>
<?php
}

function generate_linkblock($link) {
	if (array_key_exists('zoom', $link) == false) $link['zoom'] = 120;
?>
				<a id=<?="\"".$link['id']."\""?> class="chsel" href=<?="\"".$link['link']."\""?>>
					<div class="imgholder" style="
						background-image: url(<?=$link['img']?>);
						background-size: <?=$link['zoom']?>%;
						background-position: <?=$link['x'].' '.$link['y']?>;
					"></div>
					<p><?=$link['text']?></p>
				</a>
<?php
}
?>
