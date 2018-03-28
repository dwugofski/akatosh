function mending() {
	var spell = {
		name: "Mending",
		school: "transmutation",
		type: "Transmutation Cantrip",
		level: "0",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "Cantrip"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 minute"},
			{ano: true, type: "ano", name: "Range", text: "Touch"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (two lodestones)"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "This spell repairs a single break or tear in an object you touch, such as a broken chain link, two halves of a broken key, a torn cloak, or a leaking wineskin. As long as the break or tear is no larger than 1 foot in any dimension, you can mend it, leaving no trace of the former damage."},
			{par: true, type: "par", text: "This spell can physically repair a magic item or construct, but the spell can&rsquo;t restore magic to such an object."}
		]},
	};

	return spell;
}