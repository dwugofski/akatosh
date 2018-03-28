 function falselife(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "False Life",
		school: "Necromancy",
		blockclass: "necromancy",
		subtitle: "1st-Level Necromancy Spell",
		cantrip: true,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Self"},
			{name: "Component", value: "V, S, M (a amall amount of alcohol or distilled spirits)"},
			{name: "Duration", value: "1 hour"}
		]},
		description: {props: [
			{p: true,  text:"Bolstering yourself with a necromantic facsimile of life, you gain <b class=\"die heal tmp\">1d4 + 4</b> temporary hit points for the duration."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, you gain <b class=\"die heal tmp\">5</b> additional temporary hit points for each slot level above 1st."}
		]}
	});
	
	return rendered;
}