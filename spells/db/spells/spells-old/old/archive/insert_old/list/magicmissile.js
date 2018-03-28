 function magicmissile(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Magic Missile",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-level Evocation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action "},
			{name: "Range", value: "120 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"You create three glowing darts of magical force. Each dart hits a creature of your choice that you can see within range. A dart deals <b class=\"die dmg force\">1d4 + 1</b> force damage to its target. The darts all strike simultaneously and you can direct them to hit one creature or several."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the spell creates one more dart for each slot level above 1st."}
		]}
	});
	
	return rendered;
}