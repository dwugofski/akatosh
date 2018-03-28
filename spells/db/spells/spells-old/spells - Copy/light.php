<?php $light_spell = [
	name => "Light",
	school => "evocation",
	type => "Evocation Cantrip",
	level => "0",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "Cantrip"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "Touch"],
		[ano => true, type => "ano", name => "Component", text => "V, M (a firefly or phosphorescent moss)"],
		[ano => true, type => "ano", name => "Duration", text => "1 hour"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "You touch one object that is no larger than 10 feet in any dimension. Until the spell ends, the object sheds bright light in a 20-foot radius and dim light for another 20 feet. The light can be colored as you like. Completely covering the object with something opaque blocks the light. The spell ends if you cast it again or dismiss it as an action."],
		[par => true, type => "par", text => "If you target an object held or worn by a hostile creature, that creature must make a <b class=\"die save dex\">DEX</b> saving throw to avoid the spell."]
	]],
]; ?>