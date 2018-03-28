function heatmetal() {
	var spell = {
		name: "Heat Metal",
		school: "transmutation",
		type: "2nd-level Transmutation Spell",
		level: "2",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "2"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "60 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a piece of iron and a flame)"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 1 minute"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "Choose a manufactured metal object, such as a metal weapon or suit of heavy or medium metal armor, that you can see within range. You cause the object to glow red-hot. Any creature in physical contact with the object takes <b class=\"die dmg fire\">2d8</b> fire damage when you cast the spell. Until the spell ends, you can use a bonus action on each of your subsequent turns to cause this damage again."},
			{par: true, type: "par", text: "If a creature is holding or wearing the object and takes the damage from it, the creature must succeed on a <b class=\"die save con\">CON</b> saving throw or drop the object if it can. If it doesn&rsquo;t drop the obect, it has disadvantage on attack rolls and ability checks until the start of your next turn."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 3rd level or higher, the damage increases by <b class=\"die dmg fire\">1d8</b> for each slot level above 2nd."}
		]}
	};

	return spell;
}