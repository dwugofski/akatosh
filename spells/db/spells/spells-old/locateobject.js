function locateobject() {
	var spell = {
		name: "Locate Object",
		school: "divination",
		type: "2nd-level Divination Spell",
		level: "2",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "2"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Self"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a forked twig)"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 10 minutes"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "Describe or name an object that is familiar to you. You sense the direction to the object&rsquo;s location, as long as that object is within 1,000 feet of you. If the object is in motion, you know the direction of its movement."},
			{par: true, type: "par", text: "The spell can locate a specific object known to you, as long as you have seen it up close &mdash; within 30 feet &mdash; at least once. Alternatively, the spell can locate the nearest object of a particular kind, such as a certain kind of apparel, jewelry, furniture, tool, or weapon."},
			{par: true, type: "par", text: "This spell can&rsquo;t locate an object if any thickness of lead, even a thin sheet, blocks a direct path between you and the object."}
		]},
	};

	return spell;
}