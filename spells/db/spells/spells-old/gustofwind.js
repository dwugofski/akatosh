function gustofwind() {
	var spell = {
		name: "Gust of Wind",
		school: "evocation",
		type: "2nd-level Evocation Spell",
		level: "2",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "2"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Self (60-foot line)"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a legume seed)"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 1 minute"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "A line of strong wind 60 feet long and 10 feet wide blasts from you in a direction you choose for the spell&rsquo;s duration. Each creature that starts its turn in the line must succeed on a <span class=\"die save str\">STR</span> saving throw or be pushed 15 feet away from you in a direction following the line."},
			{par: true, type: "par", text: "Any creature in the line must spend 2 feet of movement for every 1 foot it moves when moving closer to you."},
			{par: true, type: "par", text: "The gust disperses gas or vapor, and it extinguishes candles, torches, and similar unprotected flames in the area. It causes protected flames, such as those of lanterns, to dance wildly and has a 50 percent chance to extinguish them."},
			{par: true, type: "par", text: "As a bonus action on each of your turns before the spell ends, you can change the direction in which the line blasts from you."}
		]}
	};

	return spell;
}