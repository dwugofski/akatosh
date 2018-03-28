<?php $flamingsphere_spell = [
	name => "Flaming Sphere",
	school => "conjuration",
	type => "2nd-level Conjuration Spell",
	level => "2",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "2"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "60 feet"],
		[ano => true, type => "ano", name => "Component", text => "V, S, M (a bit of tallow, a pinch of brimstone, and a dusting of powdered iron)"],
		[ano => true, type => "ano", name => "Duration", text => "Concentration, up to 1 minute"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "A 5-foot diameter sphere of fire appears in an unoccupied space of your choice within range and lasts for the duration. Any creature that ends its turn within 5 feet of the sphere must make a <b class=\"die save dex\">DEX</b> saving throw. The creature takes <b class=\"die dmg fire\">2d6</b> fire damage on a failed save, or half as much damage on a successful one."],
		[par => true, type => "par", text => "As a bonus action, you can move the sphere up to 30 feet. If you ram the sphere into a creature, that creature must make the saving throw against the sphere\'s damage, and the sphere stops moving this turn."],
		[par => true, type => "par", text => "When you move the sphere, you can direct it over barriers up to five feet tall and jump it across pits up to 10 feet wide. The sphere ignites any flammable objects not being work or carried, and it sheds bright light in a 20-foot radius and dim light for an additional 20 feet."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg fire\">1d6</b> for each slot level above 2<sup>nd</sup>."]
	]],
]; ?>