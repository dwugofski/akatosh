function detectpoisonanddisease() {
	var spell = {
		name: "Detect Poison and Disease",
		school: "divination",
		type: "1st-level Divination Ritual",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Self"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a yew leaf)"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 10 minutes"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "For the duration, you sense the presence of and location of poisons, poisonous creatures, and diseases within 30 feet of you. You also identify the kind of poison, poisonous creature, or disease in each case."},
			{par: true, type: "par", text: "The spell can penetrate most barriers, but it is blocked by 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt."}
		]},
	};

	return spell;
}