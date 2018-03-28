function guidingbolt() {
	var spell = {
		name: "Guiding Bolt",
		school: "evocation",
		type: "1st-level Evocation Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "120 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "1 round"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "A flash of light streaks toward a creature of your choice within range. Make a ranged spell attack against the target. Make a ranged spell attack against the target. On a hit, the target takes <b class=\"die dmg rad\">4d6</b> radiant damage, and the next attack roll made against the target before the end of your next turn has advantage, thanks to the mystical dim light glittering on the target until then."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg rad\">1d6</b> for each slot level above 1st."}
		]},
	};

	return spell;
}