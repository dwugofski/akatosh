
function dragoncultchampion() {
	var creature = {
		name: "Dragon Cult Champion",
		size: "Medium",
		type: "humanoid",
		alignment: "Lawful Evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "16 (studded leather armor, shield)"},
			{ano: true, type: "ano", name: "Hit Points", text: "112 (15d8 + 45)"},
			{ano: true, type: "ano", name: "Speed", text: "30ft"}
		]},
		STR: "18 (+4)",
		DEX: "15 (+2)",
		CON: "16 (+3)",
		INT: "10 (+0)",
		WIS: "12 (+1)",
		CHA: "15 (+2)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Saving Throws", text: "STR +7, DEX +5, CON +6"},
			{ano: true, type: "ano", name: "Skills", text: "Athletics +10, Intimidation +5"},
			{ano: true, type: "ano", name: "Senses", text: "passive Perception 11"},
			{ano: true, type: "ano", name: "Languages", text: "Cyrodiilic"},
			{ano: true, type: "ano", name: "Challenge", text: "5 (1,800 XP)"}
		]},
		feats: {attributes: [
			{ano: true, type: "ano", name: "Brave.", text: "The champion has advantage on saving throws against being frightened"},
			{ano: true, type: "ano", name: "Brute.", text: "A melee weapon deals one extra die of its damage when the champion hits with it (included in the attack)"}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Multiattack.", text: "The champion makes two melee attacks"},
			{ano: true, type: "ano", name: "Greatsword.", text: "<i>Melee Weapon Attack</i>: +7 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg slash\">10 (2d6 + 3)</b> slashing damage."},
			{ano: true, type: "ano", name: "Shield Bash.", text: "<i>Melee Weapon Attack</i>: +7 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg bludge\">9 (2d8 + 4)</b> bludgeoning damage. If the target is a Medium or smaller creature, it must succeed on a DC 15 STR saving throw or be knocked prone."}
		]},
		reactions: {attributes: [
			{ano: true, type: "ano", name: "Parry.", text: "The champion adds 3 to its AC against one melee attack that would hit it. To do so, the champion must see the attacker and be wielding a melee weapon."}
		]}
	};
	
	return creature;
}