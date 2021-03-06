 function mordenkainenssword() {
	
	var spell = {
		name: "Mordenkainen's Sword",
		school: "evocation",
		type: "7th-level Evocation Spell",
		level: 7,
		properties: {attributes: [
			{type: "ano", name: "Level", text: "7"},
			{type: "ano", name: "Casting Time", text: "1 action"},
			{type: "ano", name: "Range", text: "60 feet"},
			{type: "ano", name: "Component", text: "V, S, M (a miniature platinum sword with a grip and pommel of copper and zinc, worth 250 gp)"},
			{type: "ano", name: "Duration", text: "Concentration, up to 1 minute"}
		]},
		description: {attributes: [
			{type: "par", text:"You create a sword-shaped plane of force that hovers within range. It lasts for the duration"},
			{type: "par", text:"When the sword appears, you make a melee spell attack against a target of your choice within 5 feet of the sword. On a hit, the target takes <b class=\"die dmg force\">3d10</b> force damage. Until the spell ends, you can use a bonus action on each of your turns to move the sword up to 20 feet to a spot you can see and repeat this attack against the same target or a different one."}
		]}
	};
	
	return spell;
}