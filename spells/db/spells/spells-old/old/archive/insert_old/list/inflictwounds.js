 function inflictwounds(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Inflict Wounds",
		school: "Necromancy",
		blockclass: "necromancy",
		subtitle: "1st-level Necromancy Spell",
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
			{p: true,  text:"Make a melee spell attack against a creature you can reach. On a hit, the target takes <b class=\"die dmg necro\">3d10</b> necrotic damage."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg necro\">1d10</b> for each slot level above 1<sup>st</sup>."}
		]}
	});
	
	return rendered;
}