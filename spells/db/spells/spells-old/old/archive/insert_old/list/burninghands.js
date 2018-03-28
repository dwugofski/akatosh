 function burninghands(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Burning Hands",
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
			{p: true,  text:"As you hold your hands with thumbs touching and fingers spread, a thin sheet of flames shoots forth from your outstretched fingertips. Each creature in a 15-foot cone must make a <b class=\"die save dex\">DEX</b> saving throw. A creature takes <b class=\"die dmg fire\">3d6</b> fire damage on a failed save, or half as much damage on a successful one."},
			{p: true,  text:"The fire ignites any flammable objects in the area that aren&rsquo;t being worn or carried."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg fire\">1d6</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}