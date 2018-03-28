 function fogcloud(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Fog Cloud",
		school: "Conjuration",
		blockclass: "conjuration",
		subtitle: "1st-level Conjuration Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "120 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Concentration, up to 1 hour"}
		]},
		description: {props: [
			{p: true,  text:"You create a 20-foot-radius sphere of fog centered on a point within range. The sphere spreads around corners, and its area is heavily obscured, It lasts for the duration or until a wind of moderate or greater speed (at least 10 miles per hour) disperses it."}
		]}
	});
	
	return rendered;
}