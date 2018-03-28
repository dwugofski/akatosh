 function sacredflame(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Sacred Flame",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "Evocation Cantrip",
		cantrip: true,
		level: 0,
		properties: {props: [
			{name: "Level", value: "Cantrip"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"Flame-like radiance descends on a creature that you can see within range. The target must succeed on a <b class=\"die save dex\">DEX</b> saving throw or take <b class=\"die dmg rad\">1d8</b> radiant damage. The target gains no benefit from cover for this saving throw."}
		]},
		higher: {props: [
			{p: true,  text:"The spell&rsquo;s damage increases by <b class=\"die dmg rad\">1d8</b> when you reach 5<sup>th</sup> level (<b class=\"die dmg rad\">2d8</b>), 11<sup>th</sup> level (<b class=\"die dmg rad\">3d8</b>), and 17<sup>th</sup> level (<b class=\"die dmg rad\">4d8</b>)."}
		]}
	});
	
	return rendered;
}