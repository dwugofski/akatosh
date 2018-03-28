 function divinefavor(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Divine Favor",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-level Evocation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 bonus action"},
			{name: "Range", value: "Self"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Concentration, up to 1 minute"}
		]},
		description: {props: [
			{p: true,  text:"Your prayer empowers you with divine radiance. Until the spell ends, your weapon attacks deal an extra <b class=\"die dmg rad\">1d4</b> radiant damage on a hit."}
		]}
	});
	
	return rendered;
}