<?php
if (! isset($compath)) $compath = "dnd.akatosh.com/com/";
if (substr($compath, -1) != "/") $compath = $compath . "/";
if (! isset($racepath)) $racepath = $_SERVER['DOCUMENT_ROOT']."/over/race/db/races";
if (substr($racepath, -1) != "/") $racepath = $racepath . "/";
?><script type="text/javascript">
		var races_path="<?= $racepath?>";
		var all_race_shorts = [
<?php
		$pref = "";
		foreach(glob($racepath."*.js") as $filename){
			$short = basename($filename, ".js");
			echo "$pref\t\t\t\"$short\"";
			$pref=",\n";
		}
		?>

		];
		var all_race_names = [];
		var all_races = [];
	</script>
	<script type="text/javascript" src="<?= $compath?>js/def/load_dynobjs.js"></script>
	<script type="text/javascript" src="<?= $compath?>js/races/load_all_races.js"></script>