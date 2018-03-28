 function detectpoisonanddisease(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Detect Poison and Disease",
		school: "Divination",
		blockclass: "divination",
		subtitle: "1st-level Divination Ritual",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Self"},
			{name: "Component", value: "V, S, M (a yew leaf)"},
			{name: "Duration", value: "Concentration, up to 10 minutes"}
		]},
		description: {props: [
			{p: true,  text:"For the duration, you sense the presence of and location of poisons, poisonous creatures, and diseases within 30 feet of you. You also identify the kind of poison, poisonous creature, or disease in each case."},
			{p: true,  text:"The spell can penetrate most barriers, but it is blocked by 1 foot of stone, 1 inch of common metal, a thin sheet of lead, or 3 feet of wood or dirt."}
		]}
	});
	
	return rendered;
}