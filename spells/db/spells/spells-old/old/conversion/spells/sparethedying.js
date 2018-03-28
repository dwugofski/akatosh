function sparethedying() {
	var spell = {
		name: "Spare the Dying",
		school: "necromancy",
		type: "Necromancy Cantrip",
		level: "0",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "Cantrip"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Touch"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You touch a living creature that has 0 hit points. The creature becomes stable. This spell has no effect on undead or constructs."}
		]},
	};

	return spell;
}