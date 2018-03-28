function thunderwave() {
	var spell = {
		name: "Thunderwave",
		school: "evocation",
		type: "1st-level Evocation Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Self (15-foot cone)"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "A wave of thunderous force sweeps out from you. Each creature in a 15-foot cube originating from you must make a <b class=\"die save con\">CON</b> saving throw. On a failed save, a creature takes <b class=\"die dmg thun\">2d8</b> thunder damage and is pushed 10 feet away from you. On a successful save, the creature takes half as much damage and isn&rsquo;t pushed."},
			{par: true, type: "par", text: "In addition, unsecured objects that are completely within the area of effect are automatically pushed 10 feet away from you by the spell&rsquo;s effect, and the spell emits a thunderous boom audible out to 300 feet."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg thun\">1d8</b> for each slot level above 1st."}
		]},
	};

	return spell;
}