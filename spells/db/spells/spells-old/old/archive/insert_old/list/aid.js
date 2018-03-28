 function aid(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Aid",
		school: "Abjuration",
		blockclass: "abjuration",
		subtitle: "2nd-level Abjuration Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "30 feet"},
			{name: "Component", value: "V, S, M (a tiny strip of white cloth)"},
			{name: "Duration", value: "8 hours"}
		]},
		description: {props: [
			{p: true,  text:"Your spell bolsters your allies with toughness and resolve. Choose up to three creatures within range. Each target's hit point maximum and current hit points increase by <b class=\"die heal tmp\">5</b> for the duration."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, a target&rsquo;s hit points increase by an additional <b class=\"die heal tmp\">5</b> for each slot level above 2<sup>nd</sup>."}
		]}
	});
	
	return rendered;
}