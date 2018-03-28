 function shield(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Shield",
		school: "Abjuration",
		blockclass: "abjuration",
		subtitle: "1st-level Abjuration Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "Special"},
			{name: "Range", value: "Self (15-foot cone)"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{h: true, name: "Reaction",  text: "You are hit by an attack or targetted by the magic missile spell"},
			{p: true,  text:"An invisible barrier of magical force appears and protects you. Until the start of your next turn, you have a +5 bonus to AC, including against the triggering attack, and you take no damage from magic missile."}
		]}
	});
	
	return rendered;
}