 function thunderwave(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Thunderwave",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "1st-level Evocation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Self (15-foot cone)"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"A wave of thunderous force sweeps out from you. Each creature in a 15-foot cube originating from you must make a <b class=\"die save con\">CON</b> saving throw. On a failed save, a creature takes <b class=\"die dmg thun\">2d8</b> thunder damage and is pushed 10 feet away from you. On a successful save, the creature takes half as much damage and isn&rsquo;t pushed."},
			{p: true,  text:"In addition, unsecured objects that are completely within the area of effect are automatically pushed 10 feet away from you by the spell&rsquo;s effect, and the spell emits a thunderous boom audible out to 300 feet."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg thun\">1d8</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}