function rayofsickness() {
	var spell = {
		name: "Ray of Sickness",
		school: "necromancy",
		type: "1st-level Necromancy Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "60 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "A ray of sickening greenish energy lashes out toward a creature within range. Make a ranged spell attack against the target. On a hit, the target takes <b class=\"die dmg poison\">2d8</b> poison damage and must make a <b class=\"die save con\">CON</b> saving throw. On a failed save, it is also <b class=\"stat dmg poison\">poisoned</b> until the end of your next turn."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg poison\">1d8</b> for each slot level above 1st."}
		]},
	};

	return spell;
}