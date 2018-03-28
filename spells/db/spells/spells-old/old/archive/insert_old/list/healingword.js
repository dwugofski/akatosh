 function healingword(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Healing Word",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-level Evocation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "120 feet"},
			{name: "Component", value: "V"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"A creature of your choice that you can see within range regains hit points equal to <b class=\"die heal\">1d4</b> + your spellcasting ability modifier. This spell has no effect on undead or constructs."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the healing increases by <b class=\"die heal\">1d4</b> for each slot level above 1<sup>st</sup>."}
		]}
	});
	
	return rendered;
}