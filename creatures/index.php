<?php
	include "index_head.php";
?>
		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">Creatures</div>
			<div class="main" style="top: 140px; left: 50px;">Terrors of Tamriel</div>
		</div>
		<section id="Creatures of Tamriel">
			<div id="creaturesearchbox" class="searchbox">
				<h1>Search for Creatures</h1>
				<div id="names" class="inprow">
					<form action='./' method='post'>
						<input type="search" id="mobsearch" class="searchinp" placeholder="" name="mobnames">
						<button type="submit" value="Name">Search By Name</button>
					</form>
					<div class="clearer"></div>
				</div>
				<div id="factions" class="inprow">
					<form action='./' method='post'>
						<select id="faction_sel" class="lstinp" name="faction">
							<option value="dragoncult">Dragon Cult</option>
							<option value="draugr">Draugr</option>
							<option value="dremora">Dremora</option>
							<option value="summoneddaedra">Summoned Daedra</option>
						</select>
						<button type="submit" value="Faction">Search By Faction</button>
					</form>
				</div>
			</div>
			<div id="creaturebox">
<?php 
if (array_key_exists('mobnames' , $_POST ) == true) {
	$namestring = $_POST['mobnames'];
	$namestrings = explode(',', $namestring);
	$goodnames = [];

	foreach ($namestrings as $name) {
		$found = false;
		foreach ($mobnames as $mobname) {
			$found |= ($mobname['id'] == $name);
			if ($found) {
				$goodnames[] = $name;
				break;
			}
		}
	}

	load_entities($goodnames, $mustache, 'db/mobs/', 'db/mob_template.html', '_mob');
}
elseif (array_key_exists('faction' , $_POST ) == true) {
	$faction = $_POST['faction'];
	if (in_array($faction, $mobfactions) == true) {
		load_entities(${$faction.'_mobfaction'}['mobs'], $mustache, 'db/mobs/', 'db/mob_template.html', '_mob');
	}
}
else load_entities('all', $mustache, 'db/mobs/', 'db/mob_template.html', '_mob');
?>
			</div>
		</section>
<?php
include "index_tail.php";
?>