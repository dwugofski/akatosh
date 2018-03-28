 function purifyfoodanddrink(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Purify Food and Drink",
		school: "Transmutation",
		blockclass: "transmutation",
		subtitle: "1st-level Transmutation Ritual",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "10 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"All nonmagical food and drink within a 5-foot-radius sphere centered on a point of your choice within range is purified and rendered free of poison and disease."}
		]}
	});
	
	return rendered;
}