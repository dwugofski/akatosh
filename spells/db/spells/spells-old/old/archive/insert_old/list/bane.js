 function bane(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Bane",
		school: "Enchantment",
		blockclass: "enchanting",
		subtitle: "1st-level Enchantment Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "30 feet"},
			{name: "Component", value: "V, S, M (a drop of blood)"},
			{name: "Duration", value: "Concentration, up to 1 minute"}
		]},
		description: {props: [
			{p: true,  text:"Up to three creatures of your choice that you can see within range must make a <b class=\"die save cha\">CHA</b> saving throws. Whenever a target that fails this saving throw makes an attack roll or a saving throw before the spell ends, the target must roll a <b class=\"die\">d4</b> and subtract the number rolled from the attack roll or saving throw."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, you can target one additional creature for each slot level above 1st."}
		]}
	});
	
	return rendered;
}