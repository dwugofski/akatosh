function firebolt() {
	var spell = {
		name: "Firebolt",
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
			{par: true, type: "par", text: "You hurl a mote of fire at a creature or object within range. Make a ranged spell attack against the target. On a hit, the target takes <b class=\'die dmg fire\'>1d10</b> fire damage. A flammable object hit by this spell ignites if it isn\'t being worn or carried. "}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "This spell&rsquo;s damage increases by <b class=\'die dmg fire\'>1d10</b> when you reach 5th level (<b class=\'die dmg fire\'>2d10</b>), 11th level (<b class=\'die dmg fire\'>3d10</b>), and 17th level (<b class=\'die dmg fire\'>4d10</b>)."}
		]},
	};

	return spell;
}