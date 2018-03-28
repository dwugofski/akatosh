 function curewounds(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Cure Wounds",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-level Evocation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"A creature you touch regains a number of hit points equal to <b class=\"die heal\">1d8</b> + your spellcasting ability modifier. This spell has no effect on undead or constructs."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the healing increases by <b class=\"die heal\">1d8</b> per slot level above 1<sup>st</sup>."}
		]}
	});
	
	return rendered;
}