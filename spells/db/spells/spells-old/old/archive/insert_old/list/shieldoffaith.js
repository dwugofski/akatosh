 function shieldoffaith(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Shield of Faith",
		school: "Abjuration",
		blockclass: "abjuration",
		subtitle: "1st-level Abjuration Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 bonus action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S, M (a small parchment with a bit of holy text written on it)"},
			{name: "Duration", value: "Concentration, up to 10 minutes"}
		]},
		description: {props: [
			{p: true,  text:"A shimmering field appears and surrounds a creature of your choice within range, granting it a +2 bonus to AC for the duration"}
		]}
	});
	
	return rendered;
}