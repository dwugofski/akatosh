function bladeward() {
	var spell = {
		name: "Blade Ward",
		school: "abjuration",
		type: "Abjuration Cantrip",
		level: "0",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "0"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "1 round"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You extend your hand and trace a sigil of warding in the air. Until the end of your next turn, you have resistance against bludgeoning, piercing, and slashing damage dealt by weapon attacks."}
		]}
	};

	return spell;
}