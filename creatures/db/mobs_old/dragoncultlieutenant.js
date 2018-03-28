
function dragoncultlieutenant() {
	var creature = {
		name: "Dragon Cult Lieutenant",
		size: "Medium",
		type: "humanoid",
		alignment: "Lawful Evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "18 (plate armor)"},
			{ano: true, type: "ano", name: "Hit Points", text: "52 (8d8 + 16)"},
			{ano: true, type: "ano", name: "Speed", text: "30ft"}
		]},
		STR: "16 (+3)",
		DEX: "11 (+0)",
		CON: "14 (+2)",
		INT: "11 (+0)",
		WIS: "11 (+0)",
		CHA: "15 (+2)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Saving Throws", text: "CON +4, WIS +2"},
			{ano: true, type: "ano", name: "Senses", text: "passive Perception 10"},
			{ano: true, type: "ano", name: "Languages", text: "Cyrodiilic"},
			{ano: true, type: "ano", name: "Challenge", text: "3 (700 XP)"}
		]},
		feats: {attributes: [
			{ano: true, type: "ano", name: "Brave.", text: "The lieutenant has advantage on saving throws against being frightened"}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Multiattack.", text: "The lieutenant makes two melee attacks"},
			{ano: true, type: "ano", name: "Greatsword.", text: "<i>Melee Weapon Attack</i>: +5 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg slash\">10 (2d6 + 3)</b> slashing damage."},
			{ano: true, type: "ano", name: "Heavy Crossbow.", text: "<i>Ranged Weapon Attack</i>: +2 to hit, range 100/400 ft., one target. Hit: <b class=\"die dmg pierce\">5 (1d10)</b> piercing damage."},
			{ano: true, type: "ano", name: "Leadership (Recharges after short or long rest).", text: "For 1 minute, the lieutenant can utter a special command or warning whenever a nonhostile creature that it can see within 30 feet of it makes an attack roll or saving throw. The creature can add a d4 to its roll provided it can hear and understand the lieutenant. A creature can benefit from only one Leadership die at a time. This effect ends if the lieutenant is incapacitated."}
		]}
	};
	
	return creature;
}