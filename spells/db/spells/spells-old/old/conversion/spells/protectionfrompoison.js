function protectionfrompoison() {
	var spell = {
		name: "Protection from Poison",
		school: "abjuration",
		type: "2nd-level Abjuration Spell",
		level: "2",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "2"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Touch"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "1 hour"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You touch a creature. If it is poisoned, you neutralize the poison. If more than one poison afflicts the target, you neutralize on poison that you know is present, or you neutralize one at random."},
			{par: true, type: "par", text: "For the duration, the target has advantage on saving throws against being poisoned, and it has resistance to poison damage."}
		]},
	};

	return spell;
}