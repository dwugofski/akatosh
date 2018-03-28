function silence() {
	var spell = {
		name: "Silence",
		school: "illusion",
		type: "2nd-level Illusion Ritual",
		level: "2",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "2"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "120 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 10 minutes"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "For the duration, no sound can be created within or pass through a 20-foot-radius sphere centered on a point you choose within range. Any creature or object entirely inside the sphere is immune to thunder damage, and creatures are deafened while entirely inside it. Casting a spell that includes a verbal component is impossible there."}
		]},
	};

	return spell;
}