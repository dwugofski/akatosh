 function detectmagic(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Detect Magic",
		school: "Divination",
		blockclass: "divination",
		subtitle: "1st-level Divination Ritual",
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
			{p: true,  text:"For the duration, you sense the presence of magic within 30 feet of you. If you sense magic in this way, you can use your action to see a faint aura around any visible creature or object in the area that bears magic, and you learn its school of magic, if any."},
			{p: true,  text:"The spell can penetrate most barriers, but it is blocked by 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt."}
		]}
	});
	
	return rendered;
}