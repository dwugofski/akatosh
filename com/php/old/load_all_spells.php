<?php
if (! isset($compath)) $compath = "dnd.akatosh.com/com/";
if (substr($compath, -1) != "/") $compath = $compath . "/";
if (! isset($spellspath)) $spellspath = $_SERVER['DOCUMENT_ROOT']."/spells/db/spells/";
if (substr($spellspath, -1) != "/") $spellspath = $spellspath . "/";
?><script type="text/javascript">
		var spells_path="<?= $spellspath?>";
		var all_spell_shorts = [
<?php
		$pref = "";
		foreach(glob($spellspath."*.js") as $filename){
			$short = basename($filename, ".js");
			echo "$pref\t\t\t\"$short\"";
			$pref=",\n";
		}
		?>
		
		];
	</script>
	<script type="text/javascript" src="<?= $compath?>js/spells/load_spells.js"></script>
	<script type="text/javascript" src="<?= $compath?>js/spells/load_all_spells.js"></script>
