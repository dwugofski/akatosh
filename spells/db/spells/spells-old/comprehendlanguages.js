function comprehendlanguages() {
	var spell = {
		name: "Comprehend Languages",
		school: "enchantment",
		type: "1st-level Enchantment Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Self"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a pinch of soot and salt)"},
			{ano: true, type: "ano", name: "Duration", text: "1 hour"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "For the duration, you understand the literal meaning of any spoken language that you hear. You also understand any spoken language that you hear. You also understand any written language that you see, but you must be touching the surface of which the words are written. It takes about 1 minute to read one page of text."},
			{par: true, type: "par", text: "This spell doesn&rsquo;t decode secret messages in a text or glyph, such as an arcane sigil, that isn&rsquo;t part of a written language."}
		]}
	};

	return spell;
}