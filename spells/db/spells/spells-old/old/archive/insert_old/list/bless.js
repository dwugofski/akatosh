 function bless(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Bless",
		school: "Enchantment",
		blockclass: "enchanting",
		subtitle: "1st-level Enchantment Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "30 feet"},
			{name: "Component", value: "V, S, M (a sprinking of holy water)"},
			{name: "Duration", value: "Concentration, up to 1 minute"}
		]},
		description: {props: [
			{p: true,  text:"You bless up to three creatures of your choice within range. Whenever a target makes an attack roll or a saving throw before the spell ends, the target can roll a <b class=\"die\">d4</b> and ad the number rolled to the attack roll or saving throw."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, you can target one additional creature for each slot level above 1st."}
		]}
	});
	
	return rendered;
}