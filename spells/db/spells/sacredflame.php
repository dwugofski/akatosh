<?php $sacredflame_spell = [
	'name' => "Sacred Flame",
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
		['par' => true, 'type' => "par", 'text' => "Flame-like radiance descends on a creature that you can see within range. The target must succeed on a <b class=\"die save dex\">DEX</b> saving throw or take <b class=\"die dmg rad\">1d8</b> radiant damage. The target gains no benefit from cover for this saving throw."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "The spell&rsquo;s damage increases by <b class=\"die dmg rad\">1d8</b> when you reach 5<sup>th</sup> level (<b class=\"die dmg rad\">2d8</b>), 11<sup>th</sup> level (<b class=\"die dmg rad\">3d8</b>), and 17<sup>th</sup> level (<b class=\"die dmg rad\">4d8</b>)."]
	]],
]; ?>