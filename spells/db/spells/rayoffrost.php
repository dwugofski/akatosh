<?php $rayoffrost_spell = [
	'name' => "Ray of Frost",
	'school' => "evocation",
	'type' => "Evocation Cantrip",
	'level' => "0",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "Cantrip"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "60 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "A frigid beam of blue-white light streaks toward a creature within range. Make a ranged spell attack against the target. On a hit, it takes <b class=\"die dmg cold\">1d8</b> cold damage, and its speed is reduced by 10 feet until the start of your next turn."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "The spell&rsquo;s damage increases by <b class=\"die dmg cold\">1d8</b> when you reach 5th level (<b class=\"die dmg cold\">2d8</b>), 11th level (<b class=\"die dmg cold\">3d8</b>), and 17th level (<b class=\"die dmg cold\">4d8</b>)."]
	]]
]; ?>