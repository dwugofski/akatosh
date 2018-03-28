function conductivebolt() {
	var spell = {
		name: "Conductive Bolt",
		school: "evocation",
		type: "Evocation Cantrip",
		level: "0",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "Cantrip"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "120 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You shoot a small bolt of lightning at a creature within range. Make a ranged spell attack against the target. On a hit, the target takes <b class=\"die dmg lightning\">1d4</b> lightning damage and must make a <b class=\"die save con\">CON</b> saving throw. On a failed save, it is also paralyzed until the end of your next turn."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "This spell&rsquo;s damage increases by <b class=\'die dmg lightning\'>1d4</b> when you reach 5th level (<b class=\'die dmg lightning\'>2d4</b>), 11th level (<b class=\'die dmg lightning\'>3d4</b>), and 17th level (<b class=\'die dmg lightning\'>4d4</b>)."}
		]},
	};

	return spell;
}