function divineword() {
	var spell = {
		name: "Divine Word",
		school: "evocation",
		type: "7th-level Evocation Spell",
		level: "7",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "7"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 bonus action"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "V"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You utter a divine word, imbued with the power that shaped the world at the dawn of creation. Choose any number of creatures you can see within range. Each creature that can hear you must make a <b class=\"die save cha\">CHA</b> saving throw. On a failed save, a creature suffers an effect based upon its current hit points:"},
			{lst: true, type: "lst", bulleted: true, items: [
				{text: "50 hit points or fewer: deafened for 1 minute"},
				{text: "40 hit points or fewer: deafened and blinded for 10 minutes"},
				{text: "30 hit points or fewer: blinded, deafened, and stunned for 1 hour"},
				{text: "20 hit points or fewer: killed instantly"}
			]},
			{par: true, type: "par", text: "Regardless of its current hit points, a celestial, an elemental, a fey, or a fiend that fails its save is forced back to its plane of origin (if it isn&rsquo;t there already) and can&rsquo;t return to your current plane for 24 hours by any means short of a <i>wish</i> spell."}
		]},
	};

	return spell;
}