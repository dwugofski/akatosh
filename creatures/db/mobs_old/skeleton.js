
function skeleton() {
	var creature = {
		name: "Skeleton",
		size: "Medium",
		type: "undead",
		alignment: "Lawful Evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "13 (armor scraps)"},
			{ano: true, type: "ano", name: "Hit Points", text: "12 (2d8 + 4)"},
			{ano: true, type: "ano", name: "Speed", text: "30ft"}
		]},
		STR: "10 (0)",
		DEX: "14 (+2)",
		CON: "15 (+2)",
		INT: "6 (-2)",
		WIS: "8 (-1)",
		CHA: "5 (-3)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Damage Vulnerabilities", text: "bludgeoning"},
			{ano: true, type: "ano", name: "Damage Immunities", text: "poison"},
			{ano: true, type: "ano", name: "Condition Immunities", text: "exhaustion, poisoned"},
			{ano: true, type: "ano", name: "Senses", text: "Darkvision 60ft., passive Perception 9"},
			{ano: true, type: "ano", name: "Languages", text: "Understands all languages it knew in life but cannot speak"},
			{ano: true, type: "ano", name: "Challenge", text: "1/4 (50 XP)"}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Shortsword", text: "<i>Melee Weapon Attack</i> +4 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg pierce\">5 (1d6 + 2)</b> piercing damage."},
			{ano: true, type: "ano", name: "Shortbow", text: "<i>Ranged Weapon Attack</i> +4 to hit, range 80/320 ft., one target. Hit: <b class=\"die dmg slash\">5 (1d6 + 2)</b> piercing damage."}
		]}
	};
	
	return creature;
}