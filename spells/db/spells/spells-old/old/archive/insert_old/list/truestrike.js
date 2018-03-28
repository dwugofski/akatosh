 function truestrike(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "True Strike",
		school: "Divination",
		blockclass: "divination",
		subtitle: "Divination Cantrip",
		cantrip: true,
		level: 0,
		properties: {props: [
			{name: "Level", value: "Cantrip"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "30 feet"},
			{name: "Component", value: "S"},
			{name: "Duration", value: "Concentration, up to 1 round"}
		]},
		description: {props: [
			{p: true,  text:"You extend your hand and point a finger at a target in range. Your magic grants you a brief insight into the target’s defenses. On your next turn, you gain advantage on your first attack roll against the target, provided that this spell hasn’t ended."}
		]}
	});
	
	return rendered;
}