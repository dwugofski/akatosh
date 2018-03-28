<?php $hex_spell = [
	name => "Hex",
	school => "enchantment",
	type => "1st-level Enchantment Spell",
	level => "1",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "1"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 bonus action"],
		[ano => true, type => "ano", name => "Range", text => "90 feet"],
		[ano => true, type => "ano", name => "Component", text => "V, S, M (the petrified eye of a newt)"],
		[ano => true, type => "ano", name => "Duration", text => "Concentration, up to 1 hour"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "You place a curse on a creature that you can see within range. Until the spell ends, you deal an extra <b class=\"die dmg necro\">1d6</b> necrotic damage to the target whenever you hit it with an attack. Also, choose one ability when you cast the spell. The target has disadvantage on ability checks made with the chosen ability."],
		[par => true, type => "par", text => "If the target drops to 0 hit points before this spell ends, you can use a bonus action on a subsequent turn of yours to curse a new creature."],
		[par => true, type => "par", text => "A remove curse cast on the target ends this spell early."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 3rd or 4th level, you can maintain your concentration on the spell for up to 8 hours. When you use a spell slot of 5th level or higher, you can maintain your concentration on the spell for up to 24 hours."]
	]],
]; ?>