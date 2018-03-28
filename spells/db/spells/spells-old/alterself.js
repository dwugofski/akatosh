function alterself() {
	var spell = {
		name: "Alter Self",
		school: "transmutation",
		type: "2nd-level Transmutation Spell",
		level: "2",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "2"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Self"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "Concentration, up to 1 hour"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You assume a different form. When you cast the spell, choose one of the following options, the effects of which last for the duration of the spell. While the spell lasts, you can end one option as an action to gain the benefits of a different one."},
			{par: true, type: "par", text: "<b>Aquatic Adaptation.</b> You adapt your body to an aquatic environment, sprouting gills, and growing webbing between your fingers. You can breathe underwater and gain a swimming speed equal to your walking speed."},
			{par: true, type: "par", text: "<b>Change Appearance.</b> You transform your appearnce. You decide what you look like, including your height, weight, facial features, sound of your voice, hair length, coloration, and distinguishing characteristics, if any. At any time for the duration of the spell, you can use your action to change your appearance in this way again."},
			{par: true, type: "par", text: "<b>Natural Weapons.</b> You grow claws, fangs, spines, horns, or a different natural weapon of your choice. Your unarmed strikes deal <b class=\"die dmg bludge\">1d6</b> bludgeoning, piercing, or slashing damage, as appropriate to the natural weapon you chose, and you are proficient with your unarmed strikes. Finally, the natural weapon is magic and you have a <b class=\"die dmg bludge\">+1 bonus</b> to the attack and damage rolls you make using it."}
		]},
	};

	return spell;
}