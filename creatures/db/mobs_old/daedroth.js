
function daedroth() {
	var creature = {
		name: "Daedroth",
		size: "Large",
		type: "daedra",
		alignment: "unaligned",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "13 (natural armor)"},
			{ano: true, type: "ano", name: "Hit Points", text: "53 (7d10 + 21)"},
			{ano: true, type: "ano", name: "Speed", text: "40ft"}
		]},
		STR: "20 (+3)",
		DEX: "12 (+1)",
		CON: "17 (+3)",
		INT: "3 (-4)",
		WIS: "12 (+1)",
		CHA: "7 (-2)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Skills", text: "Athletics +5"},
			{ano: true, type: "ano", name: "Damage Resistance", text: "fire"},
			{ano: true, type: "ano", name: "Senses", text: "Darkvision 120ft., passive Perception 11"},
			{ano: true, type: "ano", name: "Languages", text: "&mdash;"},
			{ano: true, type: "ano", name: "Challenge", text: "3 (700 XP)"}
		]},
		feats: {attributes: [
			{ano: true, type: "ano", name: "Wounded Fury", text: "With 10 hitpoints or lower, the daedroth has advantage on attack rolls. In addition, it deals an extra <b class=\"die dmg\">7 (2d6)</b> damage to any target it hits with a melee attack."}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Multiattack", text: "Daedroths can make 2 claw attacks"},
			{ano: true, type: "ano", name: "Bite", text: "<i>Melee Weapon Attack</i> +5 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg slash\">9 (2d6 + 3)</b> slashing damage."},
			{ano: true, type: "ano", name: "Fire Breath", text: "A daedroth can exhale a 15 ft. cone of fire from its mouth. Each creature in that area must make a DC 14 <b class=\"die save dex\">DEX</b> saving throw, taking <b class=\"die dmg fire\">10 (3d6)</b> fire damage on a failed save, or half as much damage on a successful one."}
		]}
	};
	
	return creature
}