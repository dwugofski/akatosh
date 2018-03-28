 function chromaticorb(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Chromatic Orb",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-level Evocation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "90 feet"},
			{name: "Component", value: "V, S, M (a diamond worth at least 50 gp)"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"You hurl a 4-inch-diameter sphere of energy at a creature that you can see within range. You choose acid, cold, fire, lightning, poison, or thunder for the type of orb you create, and then make a ranged spell attack against the target. If the attack hits, the creature takes <b class=\"die dmg force\">3d8</b> damage of the type you chose."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg force\">1d8</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}