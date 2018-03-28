 function shatter(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Shatter",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "2nd-level Evocation Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S, M (a chip of mica)"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"A sudden loud ringing noise, painfully intense, erupts from a point of your choice within range. Each creature in a 10-foot-radius sphere centered on that point must make a <b class=\"die save con\">CON</b> saving throw. A creature takes <b class=\"die dmg thun\">3d8</b> thunder damage on a failed save, or half as much damage on a successful one. A creature made of inorganic material such as stone, crystal, or metal has disadvantage on this saving throw."},
			{p: true,  text:"A nonmagical object that isn&rsquo;t being worn or carried also takes the damage if it&rsquo;s in the spell&rsquo;s area."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 3rd level or higher, the damage increases by <b class=\"die dmg thun\">1d8</b> for each slot level above 2nd."}
		]}
	});
	
	return rendered;
}