 function alarm(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Alarm",
		school: "Abjuration",
		blockclass: "abjuration",
		subtitle: "1st-level Abjuration Ritual",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 minute"},
			{name: "Range", value: "30 feet"},
			{name: "Component", value: "V, S, M (a tiny bell and a piece of fine silver wire)"},
			{name: "Duration", value: "8 hours"}
		]},
		description: {props: [
			{p: true,  text:"You set an alarm against unwanted intrusion. Choose a door, a window, or an area within range that is no larger than a 20-foot cube. Until the spell ends, an alarm alerts you whenever a tiny or larger creature touches or enters the warded area. When you cast the spell, you can designate creatures that won’t set off the alarm. You also choose whether the alarm is mental or audible."},
			{p: true,  text:"A mental alarm alerts you with a ping in your mind if you are within 1 mile of the warded area. This ping awakens you if you are sleeping."},
			{p: true,  text:"An audible alarm produces the sound of a hand bell for 10 seconds within 60 feet."}
		]}
	});
	
	return rendered;
}