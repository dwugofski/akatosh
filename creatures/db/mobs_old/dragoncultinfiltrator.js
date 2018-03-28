
function dragoncultinfiltrator() {
	var creature = {
		name: "Dragon Cult Infiltrator",
		size: "Medium",
		type: "humanoid",
		alignment: "Lawful Evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "12 (leather armor)"},
			{ano: true, type: "ano", name: "Hit Points", text: "27 (6d8)"},
			{ano: true, type: "ano", name: "Speed", text: "30ft"}
		]},
		STR: "10 (+0)",
		DEX: "15 (+2)",
		CON: "10 (+0)",
		INT: "12 (+1)",
		WIS: "14 (+2)",
		CHA: "16 (+3)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Skills", text: "Deception +5, Insight +4, Investigation +5, Perception +6, Persuasion +5, Sleight of Hand +4, Stealth +4"},
			{ano: true, type: "ano", name: "Senses", text: "passive Perception 16"},
			{ano: true, type: "ano", name: "Languages", text: "any two languages (one is usually Cyrodiilic)"},
			{ano: true, type: "ano", name: "Challenge", text: "1 (200 XP)"}
		]},
		feats: {attributes: [
			{ano: true, type: "ano", name: "Cunning Action.", text: "On each of its turns, the infiltrator can use a bonus action to take the Dash, Disengage, or Hide action"},
			{ano: true, type: "ano", name: "Sneak Attack.", text: "Once per turn, the infiltrator deals an extra 7 (2d6) damage when it hits a target with a weapon attack and has advantage on the attack roll, or when the target is within 5 feet of an ally of the infiltrator that isn&rsquo;t incapacitated and the infiltrator doesn&rsquo;t have disadvantage on the attack roll."}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Multiattack.", text: "The infiltrator makes two melee attacks"},
			{ano: true, type: "ano", name: "Shortsword.", text: "<i>Melee Weapon Attack</i>: +4 to hit, reach 5 ft., one creature. Hit: <b class=\"die dmg pierce\">5 (1d6 + 2)</b> Piercing damage."},
			{ano: true, type: "ano", name: "Hand Crossbow.", text: "<i>Ranged Weapon Attack</i>: +4 to hit, range 30/120 ft., one target. Hit: <b class=\"die dmg pierce\">5 (1d6 + 2)</b> piercing damage."}
		]}
	};
	
	return creature;
}