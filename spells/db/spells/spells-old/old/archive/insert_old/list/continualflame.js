 function continualflame(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Continual Flame",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "2nd-level Evocation Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, S, M (ruby dust worth 50 go, which the spell consumes)"},
			{name: "Duration", value: "Until dispelled"}
		]},
		description: {props: [
			{p: true,  text:"A flame, equivalent in brightness to a torch, springs forth from an object that you touch. The effect looks like a regular flame, but it creates no heat and doesn’t use oxygen. A continual flame can be covered or hidden but not smothered or quenched."}
		]}
	});
	
	return rendered;
}