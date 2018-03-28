function magehand() {
	var spell = {
		name: "Mage Hand",
		school: "conjuration",
		type: "Conjuration Cantrip",
		level: "0",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "Cantrip"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "1 minute"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "A spectral, floating hand appears at a point you choose within range. The hand lasts for the duration or until you dismiss it as an action. The hand vanishes if it is ever more than 30 feet away from you or if you cast this spell again."},
			{par: true, type: "par", text: "You can use your action to control the hand. You can use the hand to manipulate an object, open an unlocked door or container, stow or retrieve an item from an open container, or pour the contents out of a vial. You can move the hand up to 30 feet each time you use it."},
			{par: true, type: "par", text: "The hand can’t attack, activate magical items, or carry more than 10 pounds."}
		]}
	};

	return spell;
}