 function web(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Web",
		school: "Conjuration",
		blockclass: "conjuration",
		subtitle: "2nd-level Conjuration Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S, M (a bit of spiderweb)"},
			{name: "Duration", value: "Concentration, up to 1 hour"}
		]},
		description: {props: [
			{p: true,  text:"You conjure a mass of thick, sticky webbing at a point of your choice within range. The webs fill a 20-foot cube from that point for the duration. The webs are difficult terrain and lightly obscure their area."},
			{p: true,  text:"If the webs aren&rsquo;t anchored between two solid masses (such as walls or trees) or layered across a floor, wall, or ceiling, the conjured web collapses on itself, and the spell ends at the start of your next turn. Webs layered over a flat surface have a depth of 5 feet."},
			{p: true,  text:"Each creature that starts its turn in the webs or that enters them during its turn must make a <b class=\"die save dex\">DEX</b> saving throw. On a failed save, the creature is restrained as long as it remains in the webs or until it breaks free."},
			{p: true,  text:"A creature restrained by the webs can use its actions to make a <b class=\"die save str\">STR</b> check against your spell save DC. If it succeeds, it is no longer restrained."},
			{p: true,  text:"The webs are flammable. Any 5-foot cube of webs exposed to fire burns away in 1 round, dealing <b class=\"die dmg fire\">2d4</b> fire damage to any creature that starts its turn in the fire."}
		]}
	});
	
	return rendered;
}