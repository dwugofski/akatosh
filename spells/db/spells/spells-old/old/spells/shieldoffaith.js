function shieldoffaith() {
	var spell = {
		name: "Shield of Faith",
		school: "abjuration",
		type: "1st-level Abjuration Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 bonus action"},
			{ano: true, type: "ano", name: "Range", text: "60 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a small parchment with a bit of holy text written on it)"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 10 minutes"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "A shimmering field appears and surrounds a creature of your choice within range, granting it a +2 bonus to AC for the duration"}
		]},
	};

	return spell;
}