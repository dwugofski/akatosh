 function blindnessdeafness(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Blindness/Deafness",
		school: "Necromancy",
		blockclass: "necromancy",
		subtitle: "2nd-level Necromancy Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "30 feet"},
			{name: "Component", value: "V"},
			{name: "Duration", value: "1 minute"}
		]},
		description: {props: [
			{p: true,  text:"You can blind or deafen a foe. Choose one creature that you can see within range to make a <b class=\"die save con\">CON</b> saving throw. If it fails, the target is either blinded or deafened (your choice) for the duration. At the end of each of its turns, the target can make a <b class=\"die save con\">CON</b> saving throw. On a success, the spell ends."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, you can target one additional creature for each spell slot above 2<sup>nd</sup>."}
		]}
	});
	
	return rendered;
}