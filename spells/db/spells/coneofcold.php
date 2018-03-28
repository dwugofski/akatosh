<?php $coneofcold_spell = [
	'name' => "Cone of Cold",
	'school' => "evoation",
	'type' => "5th-level Evocation Spell",
	'level' => "5",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "5"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 Action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "Self (60-foot cone)"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (a small crystal or glass cone)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "A blast of cold air erupts from your hands. Each creature in a 60-foot cone must make a Constitution saving throw."],
		['par' => true, 'type' => "par", 'text' => "A creature takes <b class=\"die dmg cold\">8d8</b> cold damage on a failed save, or half as much damage on a successful one. A creature killed by this spell becomes a frozen statue until it thaws."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 6th level or higher, the bludgeoning damage increases by <b class=\"die dmg cold\">1d8</b> for each slot level above 5th."]
	]]
]; ?>