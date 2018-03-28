 function firebolt(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Firebolt",
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
			{p: true,  text:"You hurl a mote of fire at a creature or object within range. Make a ranged spell attack against the target. On a hit, the target takes <b class='die dmg fire'>1d10</b> fire damage. A flammable object hit by this spell ignites if it isn't being worn or carried. "}
		]},
		higher: {props: [
			{p:true, text: "This spell&rsquo;s damage increases by <b class='die dmg fire'>1d10</b> when you reach 5th level (<b class='die dmg fire'>2d10</b>), 11th level (<b class='die dmg fire'>3d10</b>), and 17th level (<b class='die dmg fire'>4d10</b>)."}
		]}
	});
	
	return rendered;
}