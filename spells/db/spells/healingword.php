<?php $healingword_spell = [
	'name' => "Healing Word",
	'school' => "evocation",
	'type' => "1st-level Evocation Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "120 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "A creature of your choice that you can see within range regains hit points equal to <b class=\"die heal\">1d4</b> + your spellcasting ability modifier. This spell has no effect on undead or constructs."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 2nd level or higher, the healing increases by <b class=\"die heal\">1d4</b> for each slot level above 1<sup>st</sup>."]
	]],
]; ?>