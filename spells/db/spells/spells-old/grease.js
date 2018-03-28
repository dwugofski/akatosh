function grease() {
	var spell = {
		name: "Grease",
		school: "conjuration",
		type: "1st-level Conjuration Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "60 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a bit of pork rind or butter)"},
			{ano: true, type: "ano", name: "Duration", text: "1 minute"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "Slick grease covers the ground in a 10-foot square centered on a point within range and turns it into difficult terrain for the duration."},
			{par: true, type: "par", text: "When the grease appears, each creature standing in its area must succeed on a <span class=\"die save dex\">DEX</span> saving throw or fall prone. A creature that enters the area or ends its turn there must also succeed on a <span class=\"die save dex\">DEX</span> saving throw or fall prone."}
		]}
	};

	return spell;
}