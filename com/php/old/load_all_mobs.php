<?php
if (! isset($compath)) $compath = "dnd.akatosh.com/com/";
if (substr($compath, -1) != "/") $compath = $compath . "/";
if (! isset($mobspath)) $mobspath = $_SERVER['DOCUMENT_ROOT']."/creatures/db/mobs/";
if (substr($mobspath, -1) != "/") $mobspath = $mobspath . "/";
?><script type="text/javascript">
		var mobs_path="<?= $mobspath?>";
		var all_mob_shorts = [
<?php
		$pref = "";
		foreach(glob($mobspath."*.js") as $filename){
			$short = basename($filename, ".js");
			echo "$pref\t\t\t\"$short\"";
			$pref=",\n";
		}
		?>
		
		];
	</script>
	<script type="text/javascript" src="<?= $compath?>js/mobs/load_mobs.js"></script>
	<script type="text/javascript" src="<?= $compath?>js/mobs/load_all_mobs.js"></script>
