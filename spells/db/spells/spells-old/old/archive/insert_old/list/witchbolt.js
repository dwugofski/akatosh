 function witchbolt(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Witch Bolt",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-level Evocation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "30 feet"},
			{name: "Component", value: "V, S, M (a twig from a tree that has been struck by lightning)"},
			{name: "Duration", value: "Concentration, up to 1 minute"}
		]},
		description: {props: [
			{p: true,  text:"A beam of crackling, blue energy lances out toward a creature within range, forming a sustained arc of lightning between you and the target. Make a ranged spell attack against that creature. On a hit, the target takes <b class=\"die dmg lightning\">1d12</b> lightning damage, and on each of your turns for the duration, you can use your action to deal <b class=\"die dmg lightning\">1d12</b> lightning damage to the target automatically. The spell ends if you use your action to do anything else. The spell also ends if the target is ever outside the spell&rsquo;s range or if it has total cover from you."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the initial damage increases by <b class=\"die dmg lightning\">1d12</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}