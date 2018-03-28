 function prayerofhealing(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Prayer of Healing",
		school: "Enchantment",
		blockclass: "enchanting",
		subtitle: "2nd-level Enchantment Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "10 minutes"},
			{name: "Range", value: "30 feet"},
			{name: "Component", value: "V"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"Up to six creatures of your choice that you can see within range each regain hit points equal to <b class=\"die heal\">2d8</b> + your spellcasting ability modifier. This spell has no effect on undead or constructs."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, the healing increases by <b class=\"die heal\">1d8</b> for each slot level above 2<sup>nd</sup>."}
		]}
	});
	
	return rendered;
}