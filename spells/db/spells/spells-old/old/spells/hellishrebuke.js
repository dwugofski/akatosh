function hellishrebuke() {
	var spell = {
		name: "Hellish Rebuke",
		school: "evocation",
		type: "1st-level Evocation Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "Special"},
			{ano: true, type: "ano", name: "Range", text: "90 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You point your finger, and the creature that damaged you is momentarily surrounded by hellish flames. The creature must make a <b class=\"die save dex\">DEX</b> saving throw. It takes <b class=\"die dmg fire\">2d10</b> fire damage on a failed save, or half as much damage on a successful one."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg fire\">1d10</b> for each slot level above 1st."}
		]},
	};

	return spell;
}