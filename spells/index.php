<?php
	include "index_head.php";

	function mschool_sel($schoolname){
		if (isset($_POST['school'])) if (in_array($schoolname, $_POST['school'])) {
			echo "selected=\"selected\"";
		}
	}
	function mlvl_sel($lvl){
		if (isset($_POST['lvl'])) if (in_array($lvl, $_POST['lvl'])) {
			echo "selected=\"selected\"";
		}
	}
	function mclass_sel($class){
		if (isset($_POST['class'])) if (in_array($class, $_POST['class'])) {
			echo "selected=\"selected\"";
		}
	}
?>
		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">Spells</div>
			<div class="main" style="top: 140px; left: 50px;">The Power of Aetherius</div>
		</div>
		<section id="The Power of Aetherius">
			<div id="spellsearchbox" class="searchbox">
				<h1>Search for Spells</h1>
				<div id="names" class="inprow">
					<form action='./' method='post'>
						<input type="search" id="spellsearch" class="searchinp" placeholder="" name="spellnames"/>
						<button type="submit" value="Name">Search By Name</button>
					</form>
					<div class="clearer"></div>
				</div>
				<hr/>
				<div id="other">
					<form action='./' method='post'>
						<div class="inprow" id="school">
							<span class="lbl">Spell School(s):</span>
							<select id="school_sel" name="school[]" class="js-example-basic-multiple" multiple="multiple">
								<option value="abjuration" <?php mschool_sel('abjuration'); ?>>Abjuration</option>
								<option value="conjuration" <?php mschool_sel('conjuration'); ?>>Conjuration</option>
								<option value="divination" <?php mschool_sel('divination'); ?>>Divination</option>
								<option value="enchantment" <?php mschool_sel('enchantment'); ?>>Enchantment</option>
								<option value="evocation" <?php mschool_sel('evocation'); ?>>Evocation</option>
								<option value="illusion" <?php mschool_sel('illusion'); ?>>Illusion</option>
								<option value="necromancy" <?php mschool_sel('necromancy'); ?>>Necromancy</option>
								<option value="transmutation" <?php mschool_sel('transmutation'); ?>>Transmutation</option>
							</select>
							<span class="lbl later">Spell Level(s):</span>
							<select id="lvl_sel" name="lvl[]" class="js-example-basic-multiple" multiple="multiple">
								<option value="cantrip" <?php mlvl_sel('cantrip'); ?>>Cantrip</option>
								<option value="1" <?php mlvl_sel('1'); ?>>1</option>
								<option value="2" <?php mlvl_sel('2'); ?>>2</option>
								<option value="3" <?php mlvl_sel('3'); ?>>3</option>
								<option value="4" <?php mlvl_sel('4'); ?>>4</option>
								<option value="5" <?php mlvl_sel('5'); ?>>5</option>
								<option value="6" <?php mlvl_sel('6'); ?>>6</option>
								<option value="7" <?php mlvl_sel('7'); ?>>7</option>
								<option value="8" <?php mlvl_sel('8'); ?>>8</option>
								<option value="9" <?php mlvl_sel('9'); ?>>9</option>
							</select>
						</div>
						<div class="inprow" id="class">
							<span class="lbl">Class(es):</span>
							<select id="class_sel" name="class[]" class="js-example-basic-multiple" multiple="multiple">
								<option value="bard" <?php mclass_sel('bard'); ?>>Bard</option>
								<option value="cleric" <?php mclass_sel('cleric'); ?>>Cleric</option>
								<option value="druid" <?php mclass_sel('druid'); ?>>Druid</option>
								<option value="paladin" <?php mclass_sel('paladin'); ?>>Paladin</option>
								<option value="ranger" <?php mclass_sel('ranger'); ?>>Ranger</option>
								<option value="sorcerer" <?php mclass_sel('sorcerer'); ?>>Sorcerer</option>
								<option value="warlock" <?php mclass_sel('warlock'); ?>>Warlock</option>
								<option value="wizard" <?php mclass_sel('wizard'); ?>>Wizard</option>
							</select>
							<button type="submit" value="Attributes">Search by Attributes</button>
						</div>
						<div class="inprow" id="lvl">
							<button>Generate Random Spell</button>
						</div>
					</form>
				</div>
			</div>
			<div id="spellbox">
<?php
	$spellcasters = ['Bard', 'Cleric', 'Druid', 'Paladin', 'Ranger', 'Sorcerer', 'Warlock', 'Wizard'];
	$levels = [
		'cantrip' => 'Cantrips',
		'1' => '1st-Level Spells',
		'2' => '2nd-Level Spells',
		'3' => '3rd-Level Spells',
		'4' => '4th-Level Spells',
		'5' => '5th-Level Spells',
		'6' => '6th-Level Spells',
		'7' => '7th-Level Spells',
		'8' => '8th-Level Spells',
		'9' => '9th-Level Spells'
	];

	if (array_key_exists('spellnames' , $_POST ) == true) {
		$namestring = $_POST['spellnames'];
		$namestrings = explode(',', $namestring);
		$goodnames = [];

		foreach ($namestrings as $name) {
			$found = false;
			foreach ($spellnames as $spellname) {
				$found |= ($spellname['id'] == $name);
				if ($found) {
					$goodnames[] = $name;
					break;
				}
			}
		}

		load_entities($goodnames, $mustache, 'db/spells/', 'db/spell_template.html', '_spell');
	} else include "process_spell_basics.php";
	
?>
<?php //load_entities('all', $mustache, 'db/spells/', 'db/spell_template.html', '_spell'); ?>
				<div id="spell_viewer"></div>
				<div id="spell_mask"></div>
			</div>
		</section>
<?php
include "index_tail.php";
?>