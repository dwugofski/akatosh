<?php $inflictwounds_spell = [
	'name' => "Inflict Wounds",
	'school' => "necromancy",
	'type' => "1st-level Necromancy Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "Touch"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "Make a melee spell attack against a creature you can reach. On a hit, the target takes <b class=\"die dmg necro\">3d10</b> necrotic damage."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg necro\">1d10</b> for each slot level above 1<sup>st</sup>."]
	]],
]; ?>