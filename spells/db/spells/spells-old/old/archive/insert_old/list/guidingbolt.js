 function guidingbolt(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Guiding Bolt",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-level Evocation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "120 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "1 round"}
		]},
		description: {props: [
			{p: true,  text:"A flash of light streaks toward a creature of your choice within range. Make a ranged spell attack against the target. Make a ranged spell attack against the target. On a hit, the target takes <b class=\"die dmg rad\">4d6</b> radiant damage, and the next attack roll made against the target before the end of your next turn has advantage, thanks to the mystical dim light glittering on the target until then."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg rad\">1d6</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}