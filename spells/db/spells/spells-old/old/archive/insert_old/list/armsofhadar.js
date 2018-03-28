 function armsofhadar(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Arms of Hadar",
		school: "Conjuration",
		blockclass: "conjuration",
		subtitle: "1st-level Conjuration Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action "},
			{name: "Range", value: "Self (10-foot radius)"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"You invoke the power of Hadar, the Dark Hunger. Tendrils of dark energy erupt from you and batter all creatures within 10 feet of you. Each creature in that area must make a <b class=\"die save str\">STR</b> saving throw. On a failed save, a target takes <b class=\"die dmg necro\">2d6</b> necrotic damage and can’t take reactions until its next turn. On a successful save, the creature takes half damage, but suffers no other effect. "}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg necro\">1d6</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}