<?php $scorchingray_spell = [
	name => "Scorching Ray",
	school => "evocation",
	type => "2nd-level Evocation Spell",
	level => "2",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "2"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "120 feet"],
		[ano => true, type => "ano", name => "Component", text => "V, S"],
		[ano => true, type => "ano", name => "Duration", text => "Instantaneous"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "You create three rays of fire and hurl them at targets within range. You can hurl them at one target or several."],
		[par => true, type => "par", text => "Make a ranged spell attack for each ray. On a hit, the target takes <b class=\"die dmg fire\">2d6</b> fire damage."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, you create one additional ray for each level above 2<sup>nd</sup>."]
	]],
]; ?>