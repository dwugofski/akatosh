		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">Races</div>
			<div class="main" style="top: 140px; left: 50px;">The Races of Tamriel</div>
		</div>
		<section id="racial_details" class="ocol">
		<h1>Racial Details</h1>
		<p>
			The main playable races of this campaign are the main playable races of the Elder Scrolls games: Altmer, Argonians, Bosmer, Bretons, Dunmer, Imperials, Khajiit, Nords, Orsimer, and Redguard. Statistics for each race have been chosen to reflect the abilities of the races in the games. While they would likely not be balanced with the races from vanilla 5e, racial statistics are intended to be balanced among the different races in the campaign. 
		</p>
		<div id="races">
			<script type="text/javascript">
				race_reflink_h1 = container_reflink.add_element("Races of Tamriel", "#racial_details", 1);
			</script>
<?php

	include '../com/php/mustache.php';
	
	function render_raceblock($sname) {
		echo "\t\t\t<a class=\"anchor\" id=\"".$sname."_anc\"></a>";
		echo $GLOBALS['mustache']->render(file_get_contents('race/db/race_template.html'), $GLOBALS[$sname.'_race']);
		echo "\n\t\t\t<script type=\"text/javascript\">race_reflink_h1.add_element(\"".$GLOBALS[$sname.'_race']['name']."\", \"#".$sname."_anc\", 3);</script>";
	}
	
	include 'race/db/races/altmer.php';
	include 'race/db/races/argonian.php';
	$argonian_race['left'] = true;
	include 'race/db/races/bosmer.php';
	include 'race/db/races/breton.php';
	$breton_race['left'] = true;
	include 'race/db/races/dunmer.php';
	include 'race/db/races/imperials.php';
	$imperials_race['left'] = true;
	include 'race/db/races/khajiit.php';
	include 'race/db/races/nord.php';
	$nord_race['left'] = true;
	include 'race/db/races/orsimer.php';
	include 'race/db/races/redguard.php';
	$redguard_race['left'] = true;

	render_raceblock("altmer");
	render_raceblock("argonian");
	render_raceblock("bosmer");
	render_raceblock("breton");
	render_raceblock("dunmer");
	render_raceblock("imperials");
	render_raceblock("khajiit");
	render_raceblock("nord");
	render_raceblock("orsimer");
	render_raceblock("redguard");
	/*echo "\t\t\t<a class=\"anchor\" id=\"altmer_an\"></a>";
	echo $mustache->render(file_get_contents('race/db/race_template.html'), $altmer_race);
	echo $mustache->render(file_get_contents('race/db/race_template.html'), $argonian_race);
	echo $mustache->render(file_get_contents('race/db/race_template.html'), $bosmer_race);
	echo $mustache->render(file_get_contents('race/db/race_template.html'), $breton_race);
	echo $mustache->render(file_get_contents('race/db/race_template.html'), $dunmer_race);
	echo $mustache->render(file_get_contents('race/db/race_template.html'), $imperials_race);
	echo $mustache->render(file_get_contents('race/db/race_template.html'), $khajiit_race);
	echo $mustache->render(file_get_contents('race/db/race_template.html'), $nord_race);
	echo $mustache->render(file_get_contents('race/db/race_template.html'), $orsimer_race);
	echo $mustache->render(file_get_contents('race/db/race_template.html'), $redguard_race);*/
?>
		</div>
		</section>