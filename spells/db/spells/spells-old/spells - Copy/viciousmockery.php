<?php $viciousmockery() [
	var spell = [
	name => "Vicious Mockery",
	school => "enchantment",
	type => "Enchantment Cantrip",
	level => "0",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "Cantrip"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "60 feet"],
		[ano => true, type => "ano", name => "Component", text => "V"],
		[ano => true, type => "ano", name => "Duration", text => "Instantaneous"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "You unleash a string of insults laced with subtle enchantments at a creature you can see within range. If the target can hear you (though it need not understand you), it must succeed on a <b class=\"die save wis\">WIS</b> saving throw or take <b class=\"die dmg psychic\">1d4</b> psychic damage and have disadvantage on the next attack roll it makes before the end of its next turn."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "This spell's damage increases by <b class=\"die dmg psychic\">1d4</b> when you reach 5th level (<b class=\"die dmg psychic\">2d4</b>), 11th level (<b class=\"die dmg psychic\">3d4</b>), and 17th level (<b class=\"die dmg psychic\">4d4</b>)."]
	]]
	];

	return spell;
]