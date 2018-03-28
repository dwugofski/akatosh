function bane() {
	var spell = {
		name: "Bane",
		school: "enchantment",
		type: "1st-level Enchantment Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a drop of blood)"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 1 minute"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "Up to three creatures of your choice that you can see within range must make a <b class=\"die save cha\">CHA</b> saving throws. Whenever a target that fails this saving throw makes an attack roll or a saving throw before the spell ends, the target must roll a <b class=\"die\">d4</b> and subtract the number rolled from the attack roll or saving throw."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 2nd level or higher, you can target one additional creature for each slot level above 1st."}
		]},
	};

	return spell;
}