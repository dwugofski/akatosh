 function melfsacidarrow(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Melf's Acid Arrow",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "2nd-level Evocation Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "90 feet"},
			{name: "Component", value: "V, S, M (powdered rubarb leaf and an adder&rsquo;s stomach)"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"A shimmering green arrow streaks toward a target within range and bursts in a spray of acid. Make a ranged spell attack against the target. On a hit, the target takes <b class=\"die dmg acid\">4d4</b> acid damage immediately and <b class=\"die dmg acid\">2d4</b> acid damage at the end of its next turn. On a miss, the arrow splashes the target with acid for half as much of the initial damage and no damage at the end of its next turn."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 3rd level or higher, the damage (both initial and later) increases by <b class=\"die dmg acid\">1d4</b> for each slot level above 2nd."}
		]}
	});
	
	return rendered;
}