<?php $holdperson_spell = [
	name => "Hold Person",
	school => "enchantment",
	type => "2nd-level Enchantment Spell",
	level => "2",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "2"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "60 feet"],
		[ano => true, type => "ano", name => "Component", text => "V, S, M (a small, straight piece of iron)"],
		[ano => true, type => "ano", name => "Duration", text => "Concentration, up to 1 hour"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "Choose a humanoid that you can see within range. The target must succeed on a <b class=\"die save wis\">WIS</b> saving throw or be paralyzed for the duration. At the end of each of its turns, the target can make another <b class=\"die save wis\">WIS</b> saving throw. On a success, the spell ends on the target."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, you can target one additional humanoid for each slot level above 2<sup>nd</sup>. The humanoids must be within 30 feet of each other when you target them."]
	]],
]; ?>