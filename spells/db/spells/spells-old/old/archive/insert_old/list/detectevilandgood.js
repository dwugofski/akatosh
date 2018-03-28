 function detectevilandgood(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Detect Evil and Good",
		school: "Divination",
		blockclass: "divination",
		subtitle: "1st-level Divination Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Self"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Concentration, up to 10 minutes"}
		]},
		description: {props: [
			{p: true,  text:"For the duration, you know if there is an abberation, celestial, elemental, fey, fiend, or undead within 30 feet of you, as well as where the creature is located. Similarly, you know if there is a place or object within 30 feet of you that has been magically consecrated or desecrated. "},
			{p: true,  text:"The spell can penetrate most barriers, but it is blocked by 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt."}
		]}
	});
	
	return rendered;
}