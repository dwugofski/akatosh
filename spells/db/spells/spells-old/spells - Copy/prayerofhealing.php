<?php $prayerofhealing_spell = [
	name => "Prayer of Healing",
	school => "enchantment",
	type => "2nd-level Enchantment Spell",
	level => "2",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "2"],
		[ano => true, type => "ano", name => "Casting Time", text => "10 minutes"],
		[ano => true, type => "ano", name => "Range", text => "30 feet"],
		[ano => true, type => "ano", name => "Component", text => "V"],
		[ano => true, type => "ano", name => "Duration", text => "Instantaneous"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "Up to six creatures of your choice that you can see within range each regain hit points equal to <b class=\"die heal\">2d8</b> + your spellcasting ability modifier. This spell has no effect on undead or constructs."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, the healing increases by <b class=\"die heal\">1d8</b> for each slot level above 2<sup>nd</sup>."]
	]],
]; ?>