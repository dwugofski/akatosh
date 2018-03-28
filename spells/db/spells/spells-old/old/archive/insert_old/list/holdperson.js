 function holdperson(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Hold Person",
		school: "Enchantment",
		blockclass: "enchanting",
		subtitle: "2nd-level Enchantment Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S, M (a small, straight piece of iron)"},
			{name: "Duration", value: "Concentration, up to 1 hour"}
		]},
		description: {props: [
			{p: true,  text:"Choose a humanoid that you can see within range. The target must succeed on a <b class=\"die save wis\">WIS</b> saving throw or be paralyzed for the duration. At the end of each of its turns, the target can make another <b class=\"die save wis\">WIS</b> saving throw. On a success, the spell ends on the target."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, you can target one additional humanoid for each slot level above 2<sup>nd</sup>. The humanoids must be within 30 feet of each other when you target them."}
		]}
	});
	
	return rendered;
}