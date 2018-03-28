function bless() {
	var spell = {
		name: "Bless",
		school: "enchantment",
		type: "1st-level Enchantment Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a sprinking of holy water)"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 1 minute"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You bless up to three creatures of your choice within range. Whenever a target makes an attack roll or a saving throw before the spell ends, the target can roll a <b class=\"die\">d4</b> and ad the number rolled to the attack roll or saving throw."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 2nd level or higher, you can target one additional creature for each slot level above 1st."}
		]},
	};

	return spell;
}