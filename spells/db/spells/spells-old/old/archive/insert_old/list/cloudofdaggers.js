 function cloudofdaggers(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Cloud of Daggers",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "2nd-level Evocation Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S, M (a sliver of glass)"},
			{name: "Duration", value: "Concentration, up to 1 minute"}
		]},
		description: {props: [
			{p: true,  text:"You fill the air with spinning daggers in a cube 5 feet on each side, centered on a point you choose within range. A creature takes <b class=\"die dmg slash\">4d4</b> slashing damage when it enters the spell&rsquo;s area for the first time on a turn or starts its turn there."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the initial damage increases by <b class=\"die dmg slash\">2d4</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}