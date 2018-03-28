function alarm() {
	var spell = {
		name: "Alarm",
		school: "abjuration",
		type: "1st-level Abjuration Ritual",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 minute"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a tiny bell and a piece of fine silver wire)"},
			{ano: true, type: "ano", name: "Duration", text: "8 hours"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You set an alarm against unwanted intrusion. Choose a door, a window, or an area within range that is no larger than a 20-foot cube. Until the spell ends, an alarm alerts you whenever a tiny or larger creature touches or enters the warded area. When you cast the spell, you can designate creatures that wonâ€™t set off the alarm. You also choose whether the alarm is mental or audible."},
			{par: true, type: "par", text: "A mental alarm alerts you with a ping in your mind if you are within 1 mile of the warded area. This ping awakens you if you are sleeping."},
			{par: true, type: "par", text: "An audible alarm produces the sound of a hand bell for 10 seconds within 60 feet."}
		]},
	};

	return spell;
}