<?php $acidsplash_spell = [
	'name' => "Acid Splash",
	'school' => "conjuration",
	'type' => "Conjuration Cantrip",
	'level' => "0",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "Cantrip"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "60 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You hurl a bubble of acid. Choose one creature within range, or choose two creatures within range that are within 5 feet of each other. A target must succeed on a <b class=\"die save dex\">DEX</b> saving throw or take <b class=\"die dmg acid\">1d6</b> acid damage."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "This spell’s damage increases by <b class=\"die dmg acid\">1d6</b> when you reach 5th level (<b class=\"die dmg acid\">2d6</b>), 11th level (<b class=\"die dmg acid\">3d6</b>), and 17th level (<b class=\"die dmg acid\">4d6</b>)."]
	]]
]; ?>