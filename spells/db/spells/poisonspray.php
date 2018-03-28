<?php $poisonspray_spell = [
	'name' => "Poison Spray",
	'school' => "conjuration",
	'type' => "Conjuration Cantrip",
	'level' => "0",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "Cantrip"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "10 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You extend your hand toward a creature you can see within range and project a puff of noxious gas from your palm. The creature must succeed on a <b class=\'die save con\'>CON</b> saving throw or take <b class=\'die dmg poison\'>1d12</b> poison damage."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "This spell&rsquo;s damage increases by <b class=\"die dmg poison\">1d12</b> when you reach 5th level (<b class=\"die dmg poison\">2d12</b>), 11th level (<b class=\"die dmg poison\">3d12</b>), 17th level (<b class=\"die dmg poison\">4d12</b>)."]
	]],
]; ?>