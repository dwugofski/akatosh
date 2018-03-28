function aid() {
	var spell = {
		name: "Aid",
		school: "abjuration",
		type: "2nd-level Abjuration Spell",
		level: "2",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "2"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a tiny strip of white cloth)"},
			{ano: true, type: "ano", name: "Duration", text: "8 hours"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "Your spell bolsters your allies with toughness and resolve. Choose up to three creatures within range. Each target\'s hit point maximum and current hit points increase by <b class=\"die heal tmp\">5</b> for the duration."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, a target&rsquo;s hit points increase by an additional <b class=\"die heal tmp\">5</b> for each slot level above 2<sup>nd</sup>."}
		]},
	};

	return spell;
}