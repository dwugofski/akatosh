		<section id="characterbox">
			<div class="character" id="<?=$charname?>">
<?php echo $mustache->render(file_get_contents('db/char_template.html'), $character); ?>
			</div>
<?php 
			if (array_key_exists('spellist', $character) == true) {
?>
			<div id="spellbox">
				<h1>Spells</h1>
<?php
				$spell_list = [];
				foreach($character['spellist']['levels'] as $level) {
					foreach ($level['spells'] as $spell) {
						$spell_list[] = $spell['sname'];
					}
				}
				load_entities($spell_list, $mustache, $spellspath, $spellspath.'../spell_template.html', '_spell');
?>
			</div>
<?php
			}
?>
		</section>
