
function ayleidknight() {
	var creature = {
		name: "Ayleid Knight",
		size: "Medium",
		type: "undead",
		alignment: "Lawful Evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "15 (heavy armor + shield)"},
			{ano: true, type: "ano", name: "Hit Points", text: "45 (10d8)"},
			{ano: true, type: "ano", name: "Speed", text: "30ft"}
		]},
		STR: "11 (0)",
		DEX: "13 (+1)",
		CON: "11 (0)",
		INT: "10 (0)",
		WIS: "10 (0)",
		CHA: "13 (+1)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Skills", text: "Stealth +4 (+6 in dim light or darkness)"},
			{ano: true, type: "ano", name: "Damage Vulnerabilities", text: "fire, bludgeoning"},
			{ano: true, type: "ano", name: "Damage Immunities", text: "poison"},
			{ano: true, type: "ano", name: "Condition Immunities", text: "charmed, exhaustion, frightened, poisoned"},
			{ano: true, type: "ano", name: "Senses", text: "Darkvision 60ft., passive Perception 10"},
			{ano: true, type: "ano", name: "Languages", text: "understands the languages it knew in life but cannot speak"},
			{ano: true, type: "ano", name: "Challenge", text: "1 (200 XP)"}
		]},
		feats: {attributes: [
			{ano: true, type: "ano", name: "Shield Bash", text: "When a creature fails on a melee attack roll agains the ayleid knight, the knight can bash the creature with its shield, dealing <b class=\"die dmg bludge\">9 (2d6 + 2)</b> bludgeoning damage and forcing the creature to make a DC 13 <b class=\"die save con\">CON</b> saving throw. On a failed save the creature is dazed until the start of its next turn; it becomes incapacitated and all attack rolls against it have advantage."}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Multiattack", text: "The ayleid knight can make two shortsword attacks"},
			{ano: true, type: "ano", name: "Shortsword", text: " +5 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg pierce\">17 (4d6 + 3)</b> piercing damage."}
		]}
	};
	
	return creature;
}