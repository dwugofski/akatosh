function magicweapon() {
	var spell = {
		name: "Magic Weapon",
		school: "transmutation",
		type: "2nd-level Transmutation Spell",
		level: "2",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "2"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 bonus action"},
			{ano: true, type: "ano", name: "Range", text: "Touch"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 1 hour"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You touch a nonmagical weapon. Until the spell ends, that weapon becomes a magic weapon with a +1 bonus to attack rolls and damage rolls."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 4<sup>th</sup> level or higher, the bonus increases to +2. When you use a spell slot of 6<sup>th</sup> level or higher, the bonus increases to +3."}
		]},
	};

	return spell;
}