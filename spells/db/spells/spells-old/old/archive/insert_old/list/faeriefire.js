 function faeriefire(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Faerie Fire",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-level Evocation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 bonus action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V"},
			{name: "Duration", value: "Concentration, up to 1 minute"}
		]},
		description: {props: [
			{p: true,  text:"Each object in a 20-foot cube within range is outlined in blue, green, or violet light (your choice). Any creature in the area when the spell is cast is also outlined in light if it fails a <b class=\"die save dex\">DEX</b> saving throw. For the duration, objects affected by the creature shed dim light in a 10-foot radius."},
			{p: true,  text:"Any attack roll against an affected creature or object has advantae if the attacker can see it, and the affected creature or object can&rsquo;t benefit from being invisible."}
		]}
	});
	
	return rendered;
}