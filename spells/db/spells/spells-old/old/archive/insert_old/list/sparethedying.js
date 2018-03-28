 function sparethedying(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Spare the Dying",
		school: "Necromancy",
		blockclass: "necromancy",
		subtitle: "Necromancy Cantrip",
		cantrip: true,
		level: 0,
		properties: {props: [
			{name: "Level", value: "Cantrip"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"You touch a living creature that has 0 hit points. The creature becomes stable. This spell has no effect on undead or constructs."}
		]}
	});
	
	return rendered;
}