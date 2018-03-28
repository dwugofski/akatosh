<?php $eldrichblast_spell = [
	'name' => "Eldrich Blast",
	'school' => "evocation",
	'type' => "Evocation Cantrip",
	'level' => "0",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "Cantrip"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "120 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "A beam of cracking energy streaks toward a creature within range. Make a ranged spell attack against the target. On a hit, the target takes <b class=\"die dmg force\">1d10</b> force damage."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "The spell creates more than one beam when you reach higher levels => two beams at 5th level, three beams at 11th level, and four beams at 17th level. You can direct the beams at the same target or at different ones. Make a separate attack roll for each beam."]
	]],
]; ?>