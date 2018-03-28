<?php $spiritualweapon_spell = [
	name => "Spiritual Weapon",
	school => "evocation",
	type => "2nd-level Evocation Spell",
	level => "2",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "2"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 bonus action"],
		[ano => true, type => "ano", name => "Range", text => "60 feet"],
		[ano => true, type => "ano", name => "Component", text => "V, S"],
		[ano => true, type => "ano", name => "Duration", text => "1 minute"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "You create a floating, spectral weapon within range that lasts for the duration or until you cast this spell again. When you cast the spell, you can make a melee spell attack against a creature within 5 feet of the weapon. On a hit, the target takes force damage equal to <b class=\"die dmg force\">1d8</b> + your spellcasting ability modifier."],
		[par => true, type => "par", text => "As a bonus action on your turn, you can move the weapon up to 20 feet and repeat the attack against a creature within 5 feet of it."],
		[par => true, type => "par", text => "The weapon can take whatever form you choose. Clerics of deities who are associated with a particular weapon (as St. Cuthbert is known for his mace and Thor for his hammer) make this spell&rsquo;s effect resemble that weapon."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, the damage increases by <b class=\"die dmg force\">1d8</b> for every two slots above 2<sup>nd</sup>."]
	]],
]; ?>