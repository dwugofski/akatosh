function truestrike() {
	var spell = {
		name: "True Strike",
		school: "divination",
		type: "Divination Cantrip",
		level: "0",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "Cantrip"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "S"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 1 round"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You extend your hand and point a finger at a target in range. Your magic grants you a brief insight into the targetâ€™s defenses. On your next turn, you gain advantage on your first attack roll against the target, provided that this spell hasnâ€™t ended."}
		]},
	};

	return spell;
}