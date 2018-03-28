 function conductivebolt(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Conductive Bolt",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "Evocation Cantrip",
		cantrip: true,
		level: 0,
		properties: {props: [
			{name: "Level", value: "Cantrip"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "120 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"You shoot a small bolt of lightning at a creature within range. Make a ranged spell attack against the target. On a hit, the target takes <b class=\"die dmg lightning\">1d4</b> lightning damage and must make a <b class=\"die save con\">CON</b> saving throw. On a failed save, it is also paralyzed until the end of your next turn."}
		]},
		higher: {props: [
			{p:true, text: "This spell&rsquo;s damage increases by <b class='die dmg lightning'>1d4</b> when you reach 5th level (<b class='die dmg lightning'>2d4</b>), 11th level (<b class='die dmg lightning'>3d4</b>), and 17th level (<b class='die dmg lightning'>4d4</b>)."}
		]}
	});
	
	return rendered;
}