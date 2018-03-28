function chilltouch() {
	var spell = {
		name: "Chill Touch",
		school: "necromancy",
		type: "Necromancy Cantrip",
		level: "0",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "Cantrip"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "120 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "1 round"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You create a ghostly, skeletal hand in the space of a creature within range. Make a ranged spell attack against the creature to assail it with the chill of the grave. On a hit, the target takes <b class=\'die dmg necro\'>1d8</b> necrotic damage, and it can\'t regain hit points until the start of your next turn. Until then, the hand clings to the target. If you hit an undead target, it also has disadvantage on attack rolls against you until the end of your next turn."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "This spell&rsquo;s damage increases by <b class=\'die dmg necro\'>1d8</b> when you reach 5th level (<b class=\'die dmg necro\'>2d8</b>), 11th level (<b class=\'die dmg necro\'>3d8</b>), and 17th level (<b class=\'die dmg necro\'>4d8</b>)."}
		]},
	};

	return spell;
}