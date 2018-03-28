 function locateobject(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Locate Object",
		school: "Divination",
		blockclass: "divination",
		subtitle: "2nd-level Divination Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Self"},
			{name: "Component", value: "V, S, M (a forked twig)"},
			{name: "Duration", value: "Concentration, up to 10 minutes"}
		]},
		description: {props: [
			{p: true,  text:"Describe or name an object that is familiar to you. You sense the direction to the object&rsquo;s location, as long as that object is within 1,000 feet of you. If the object is in motion, you know the direction of its movement."},
			{p: true,  text:"The spell can locate a specific object known to you, as long as you have seen it up close &mdash; within 30 feet &mdash; at least once. Alternatively, the spell can locate the nearest object of a particular kind, such as a certain kind of apparel, jewelry, furniture, tool, or weapon."},
			{p: true,  text:"This spell can&rsquo;t locate an object if any thickness of lead, even a thin sheet, blocks a direct path between you and the object."}
		]}
	});
	
	return rendered;
}