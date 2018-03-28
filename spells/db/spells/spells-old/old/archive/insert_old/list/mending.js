 function mending(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Mending",
		school: "Transmutation",
		blockclass: "transmutation",
		subtitle: "Transmutation Cantrip",
		cantrip: true,
		level: 0,
		properties: {props: [
			{name: "Level", value: "Cantrip"},
			{name: "Casting Time", value: "1 minute"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, S, M (two lodestones)"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"This spell repairs a single break or tear in an object you touch, such as a broken chain link, two halves of a broken key, a torn cloak, or a leaking wineskin. As long as the break or tear is no larger than 1 foot in any dimension, you can mend it, leaving no trace of the former damage."},
			{p: true,  text:"This spell can physically repair a magic item or construct, but the spell can&rsquo;t restore magic to such an object."}
		]}
	});
	
	return rendered;
}