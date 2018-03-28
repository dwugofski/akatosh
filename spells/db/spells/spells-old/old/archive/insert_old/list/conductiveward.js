 function conductiveward(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Conductive Ward",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-Level Evocation Spell",
		cantrip: true,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Self"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "1 minute"}
		]},
		description: {props: [
			{p: true,  text:"You charge yourself with elemental lightning, causing sparks of electricity to crackle around you. Whenever a creature attacks you with a ranged attack, a bolt of lightning shoots from you to the missile, reducing damage by <b class=\"die dmg\">1d4</b>. As well, whenever a creature attempts a melee attack against you, it must make a <b class=\"die save con\">CON</b> saving throw or be struck by electricity and paralyzed until the start of your next turn."}
		]},
		higher: {props: [
			{p:true, text: "When this spell is cast using a spell slot of 2nd level or higher, the range damage reduced by the spell increases by <b class='die dmg'>1d4</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}