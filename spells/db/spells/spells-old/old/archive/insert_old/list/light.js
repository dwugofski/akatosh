 function light(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Light",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "Evocation Cantrip",
		cantrip: true,
		level: 0,
		properties: {props: [
			{name: "Level", value: "Cantrip"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, M (a firefly or phosphorescent moss)"},
			{name: "Duration", value: "1 hour"}
		]},
		description: {props: [
			{p: true,  text:"You touch one object that is no larger than 10 feet in any dimension. Until the spell ends, the object sheds bright light in a 20-foot radius and dim light for another 20 feet. The light can be colored as you like. Completely covering the object with something opaque blocks the light. The spell ends if you cast it again or dismiss it as an action."},
			{p: true,  text:"If you target an object held or worn by a hostile creature, that creature must make a <b class=\"die save dex\">DEX</b> saving throw to avoid the spell."}
		]}
	});
	
	return rendered;
}