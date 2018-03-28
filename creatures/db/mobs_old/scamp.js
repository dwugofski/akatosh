
function scamp() {
	var creature = {
		name: "Scamp",
		size: "Small",
		type: "daedra",
		alignment: "neutral evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "11 (natural armor)"},
			{ano: true, type: "ano", name: "Hit Points", text: "12 (3d6 + 3)"},
			{ano: true, type: "ano", name: "Speed", text: "30ft"}
		]},
		STR: "8 (-1)",
		DEX: "12 (+1)",
		CON: "12 (+1)",
		INT: "7 (-2)",
		WIS: "10 (0)",
		CHA: "10 (0)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Damage Vulnerability", text: "cold"},
			{ano: true, type: "ano", name: "Damage Immunities", text: "fire"},
			{ano: true, type: "ano", name: "Senses", text: "Darkvision 60ft., passive Perception 10"},
			{ano: true, type: "ano", name: "Languages", text: "&mdash;"},
			{ano: true, type: "ano", name: "Challenge", text: "1/2 (100 XP)"}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Fire Burst", text: "A scamp can choose a spot within 60 feet an create an explosion centered there. Each creature within 5 feet must make a DC 11 <b class=\"die save dex\">DEX</b> save, taking <b class=\"die dmg fire\">7 (2d6)</b> fire damage on a failed save, or half as much on a successful one."},
			{ano: true, type: "ano", name: "Firebolt", text: "A scamp can shoot a firebolt at a target, making a ranged touch dealing <b class=\"die dmg fire\">8 (2d8)</b> fire damage on a hit."},
			{ano: true, type: "ano", name: "Claws", text: "<i>Melee Weapon Attack:</i> +3 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg slash\">3 (1d4 + 1)</b> slashing damage plus <b class=\"die dmg fire\">2 (1d4)</b> fire damage."}
		]}
	};
	
	return creature;
}