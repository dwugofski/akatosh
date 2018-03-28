function shockinggrasp() {
	var spell = {
		name: "Shocking Grasp",
		school: "evocation",
		type: "Evocation Cantrip",
		level: "0",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "Cantrip"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Touch"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: " Make a melee spell attack against the target. You have advantage on the attack roll if the target is wearing armor made of metal. On a hit, the target takes <span class=\"die dmg lightning\">1d8</span> lightning damage, and it can&rsquo;t take reactions until the start of its next turn."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "This spell&rsquo;s damage increases by <b class=\'die dmg lightning\'>1d8</b> when you reach 5th level (<b class=\'die dmg lightning\'>2d8</b>), 11th level (<b class=\'die dmg lightning\'>3d8</b>), and 17th level (<b class=\'die dmg lightning\'>4d8</b>)."}
		]},
	};

	return spell;
}