<?php $curewounds_spell = [
	'name' => "Cure Wounds",
	'school' => "evocation",
	'type' => "1st-level Evocation Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "Touch"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "A creature you touch regains a number of hit points equal to <b class=\"die heal\">1d8</b> + your spellcasting ability modifier. This spell has no effect on undead or constructs."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 2nd level or higher, the healing increases by <b class=\"die heal\">1d8</b> per slot level above 1<sup>st</sup>."]
	]],
]; ?>