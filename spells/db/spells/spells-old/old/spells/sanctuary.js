function sanctuary() {
	var spell = {
		name: "Sanctuary",
		school: "abjuration",
		type: "1st-level Abjuration Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 bonus action"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a small silver mirror)"},
			{ano: true, type: "ano", name: "Duration", text: "1 minute"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You ward a creature within range against attack. Until the spell ends, any creature who targets the warded creature with an attack or a harmful spell must first make a <b class=\"die save wis\">WIS</b> saving throw. On a failed save, the creature must choose a new target or lose the attack or spell. This spell doesn&rsquo;t protect the warded creature from area effects, such as the explosion of a fireball."},
			{par: true, type: "par", text: "If the warded creature makes an attack or casts a spell that affects an enemy creature, this spell ends."}
		]},
	};

	return spell;
}