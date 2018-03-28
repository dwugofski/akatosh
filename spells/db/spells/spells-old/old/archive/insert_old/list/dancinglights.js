 function dancinglights(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Dancing Lights",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "Evocation Cantrip",
		cantrip: true,
		level: 0,
		properties: {props: [
			{name: "Level", value: "Cantrip"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "120 feet"},
			{name: "Component", value: "V, S, M (a bit of phosphorus or wychwood, or a glowworm)"},
			{name: "Duration", value: "8 hours"}
		]},
		description: {props: [
			{p: true,  text:"You create up to four torch-sized lights within range, making them appear as torches, lanterns, or glowing orbs that hover in the air for the duration."},
			{p: true,  text:"You can also combine the four lights into one glowing vaguely humanoid form of Medium size. Whichever form you choose, each light sheds dim light in a 10-foot radius."},
			{p: true,  text:"As a bonus action on your turn, you can move the lights up to 60 feet to a new spot within range. A light must be within 20 feet of another light created by this spell, and a light winks out if it exceeds the spell&rsquo;s range."}
		]}
	});
	
	return rendered;
}