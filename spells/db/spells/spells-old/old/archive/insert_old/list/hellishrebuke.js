 function hellishrebuke(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Hellish Rebuke",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-level Evocation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "Special"},
			{name: "Range", value: "90 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{h: true, name: "Reaction",  text:"You can use this spell in response to being damaged by a creature within 60 feet of you that you can see."},
			{p: true,  text:"You point your finger, and the creature that damaged you is momentarily surrounded by hellish flames. The creature must make a <b class=\"die save dex\">DEX</b> saving throw. It takes <b class=\"die dmg fire\">2d10</b> fire damage on a failed save, or half as much damage on a successful one."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg fire\">1d10</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}