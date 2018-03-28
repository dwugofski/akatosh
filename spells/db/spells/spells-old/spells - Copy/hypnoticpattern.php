<?php $hypnoticpattern() [
	var spell = [
	name => "Hypnotic Pattern",
	school => "illusion",
	type => "3rd-level Illusion Spell",
	level => "3",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "3"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "120 feet"],
		[ano => true, type => "ano", name => "Component", text => "S, M (a glowing stick of incense or a crystal vial filled with phosphorescent material)"],
		[ano => true, type => "ano", name => "Duration", text => "Concentration, up to 1 minute"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "You create a twisting pattern of colors that weaves through the air inside a 30-foot cube within range. The pattern appears for a moment and vanishes. Each creature in the area who sees the pattern must make a <b class=\"die save wis\">WIS</b> saving throw. On a failed save, the creature becomes charmed for the duration. While charmed by this spell, the creature is incapacitated and has a speed of 0."],
		[par => true, type => "par", text => "The spell ends for an affected creature if it takes any damage or if someone else uses an action to shake the creature out of its stupor."]
	]]
	];

	return spell;
]