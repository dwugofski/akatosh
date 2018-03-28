 function silence(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Silence",
		school: "Illusion",
		blockclass: "illusion",
		subtitle: "2nd-level Illusion Ritual",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "120 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Concentration, up to 10 minutes"}
		]},
		description: {props: [
			{p: true,  text:"For the duration, no sound can be created within or pass through a 20-foot-radius sphere centered on a point you choose within range. Any creature or object entirely inside the sphere is immune to thunder damage, and creatures are deafened while entirely inside it. Casting a spell that includes a verbal component is impossible there."}
		]}
	});
	
	return rendered;
}