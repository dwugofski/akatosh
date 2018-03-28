 function rayofsickness(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Ray of Sickness",
		school: "Necromancy",
		blockclass: "necromancy",
		subtitle: "1st-level Necromancy Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"A ray of sickening greenish energy lashes out toward a creature within range. Make a ranged spell attack against the target. On a hit, the target takes <b class=\"die dmg poison\">2d8</b> poison damage and must make a <b class=\"die save con\">CON</b> saving throw. On a failed save, it is also <b class=\"stat dmg poison\">poisoned</b> until the end of your next turn."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg poison\">1d8</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}