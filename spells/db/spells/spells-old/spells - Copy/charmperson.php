<?php $charmperson_spell = [
	'name' => "Charm Person",
	'school' => "enchantment",
	'type' => "1st-level Enchantment Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "30 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "1 hour"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You attempt to charm a humanoid you can see within range. It must make a <b class=\"die save wis\">WIS</b> saving throw, and does so with advantage if you or your companions are fighting it. If it fails the saving throw, it is charmed by you until the spell ends or until you or your companions do anything harmful to it. The charmed creature regards you as a friendly acquaintance. When the spell ends, the creature knows it was charmed by you."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 2nd level or higher, you can target one additional creature for each slot level above 1st. The creature must be within 30 feat of each other when you target them."]
	]],
]; ?>