function magicmissile() {
	var spell = {
		name: "Magic Missile",
		school: "evocation",
		type: "1st-level Evocation Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action "},
			{ano: true, type: "ano", name: "Range", text: "120 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You create three glowing darts of magical force. Each dart hits a creature of your choice that you can see within range. A dart deals <b class=\"die dmg force\">1d4 + 1</b> force damage to its target. The darts all strike simultaneously and you can direct them to hit one creature or several."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 2nd level or higher, the spell creates one more dart for each slot level above 1st."}
		]},
	};

	return spell;
}