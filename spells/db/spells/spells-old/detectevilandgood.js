function detectevilandgood() {
	var spell = {
		name: "Detect Evil and Good",
		school: "divination",
		type: "1st-level Divination Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Self"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 10 minutes"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "For the duration, you know if there is an abberation, celestial, elemental, fey, fiend, or undead within 30 feet of you, as well as where the creature is located. Similarly, you know if there is a place or object within 30 feet of you that has been magically consecrated or desecrated. "},
			{par: true, type: "par", text: "The spell can penetrate most barriers, but it is blocked by 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt."}
		]},
	};

	return spell;
}