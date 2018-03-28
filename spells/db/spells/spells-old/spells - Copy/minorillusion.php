<?php $minorillusion() [
	var spell = [
	name => "Minor Illusion",
	school => "illusion",
	type => "Illusion Cantrip",
	level => "0",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "0"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "30 feet"],
		[ano => true, type => "ano", name => "Component", text => "S, M (a bit of fleece)"],
		[ano => true, type => "ano", name => "Duration", text => "1 minute"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "You create a sound or an image of an obejct within range that lasts for the duration. The illusion also ends if you dismiss it as an action or cast this spell again."],
		[par => true, type => "par", text => "If you create a sound, its volume can range from a whisper to a scream. It can be your voice, someone else&rsquo;s voice, a lion&rsquo;s roar, a beating of drums, or any other sound you choose. The sound continues unabated throughout the duration, or you can make discrete sounds at different times before the spell ends."],
		[par => true, type => "par", text => "If you create an image of an object &mdash; such as a chair, muddy footprints, or a small chest &mdash; it must be no larger than a 5-foot cube. The image can&rsquo;t create sound, light, smell, or any other sensory effect. Physical interaction with the image reveals it to be an illusion, because things can pass through it."],
		[par => true, type => "par", text => "If a creature uses its action to examine the sound or image, the creature can determine that it is an illusion with a successful <b class=\"die save int\">INT</b> (Intelligence) check against your spell save DC. If a creature discerns the illusion for what it is, the illusion becomes faint to the creature."]
	]]
	];

	return spell;
]