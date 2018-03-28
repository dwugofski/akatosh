
function draugrwight() {
	var creature = {
		name: "Draugr Wight",
		size: "Medium",
		type: "undead",
		alignment: "Neutral Evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "16 (hide armor, shield)"},
			{ano: true, type: "ano", name: "Hit Points", text: "27 (5d8 + 5)"},
			{ano: true, type: "ano", name: "Speed", text: "30ft"}
		]},
		STR: "16 (+3)",
		DEX: "10 (+0)",
		CON: "16 (+3)",
		INT: "4 (-3)",
		WIS: "6 (-2)",
		CHA: "5 (-3)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Saving Throws", text: "Wis +0"},
			{ano: true, type: "ano", name: "Damage Resistances", text: "cold"},
			{ano: true, type: "ano", name: "Damage Immunities", text: "poison"},
			{ano: true, type: "ano", name: "Condition Immunities", text: "poisoned"},
			{ano: true, type: "ano", name: "Senses", text: "passive Perception 10"},
			{ano: true, type: "ano", name: "Languages", text: "Understands all languages it knew in life but cannot speak"},
			{ano: true, type: "ano", name: "Challenge", text: "1 (200 XP)"}
		]},
		feats: {attributes: [
			{ano: true, type: "ano", name: "Pack Tactics", text: "The draugr has advantage on an attack roll against a creature if at least one of the draugr's allies is within 5 feet of the creature and the ally isn&rsquo;t incapacitated."},
			{ano: true, type: "ano", name: "Surprise Attack", text: "If the draugr surprises a creature and hits it with an attack during the first round of combat, the target takes an extra 7 (2d6) damage from the attack"}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Multiattack.", text: "The draugr makes two melee attacks"},
			{ano: true, type: "ano", name: "Axe.", text: "<i>Melee Weapon Attack</i>: +4 to hit, reach 5 ft., one creature. Hit: <b class=\"die dmg slash\">8 (2d6 + 2)</b> slashing damage."},
			{ano: true, type: "ano", name: "Longbow.", text: "<i>Ranged Weapon Attack</i>: +3 to hit, range 100/400 ft., one target. Hit: <b class=\"die dmg pierce\">8 (2d8)</b> piercing damage."}
		]}
	};
	
	return creature;
}