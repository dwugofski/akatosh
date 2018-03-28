function poisonspray(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Poison Spray",
		school: "Conjuration",
		blockclass: "conjuration",
		subtitle: "Conjuration Cantrip",
		cantrip: true,
		level: 0,
		properties: {props: [
			{name: "Level", value: "Cantrip"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "10 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"You extend your hand toward a creature you can see within range and project a puff of noxious gas from your palm. The creature must succeed on a <b class='die save con'>CON</b> saving throw or take <b class='die dmg poison'>1d12</b> poison damage."}
		]},
		higher: {props: [
			{p:true, text: "This spell&rsquo;s damage increases by <b class=\"die dmg poison\">1d12</b> when you reach 5th level (<b class=\"die dmg poison\">2d12</b>), 11th level (<b class=\"die dmg poison\">3d12</b>), 17th level (<b class=\"die dmg poison\">4d12</b>)."}
		]}
	});
	
	return rendered;
}