
function dragoncultfanatic() {
	var creature = {
		name: "Dragon Cult Fanatic",
		size: "Medium",
		type: "humanoid",
		alignment: "Lawful Evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "13 (leather armor)"},
			{ano: true, type: "ano", name: "Hit Points", text: "33 (6d8 + 6)"},
			{ano: true, type: "ano", name: "Speed", text: "30ft"}
		]},
		STR: "10 (+0)",
		DEX: "14 (+2)",
		CON: "12 (+1)",
		INT: "10 (+0)",
		WIS: "13 (+1)",
		CHA: "14 (+2)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Skills", text: "Deception +4, Persuasion +4, Religion +2"},
			{ano: true, type: "ano", name: "Senses", text: "passive Perception 11"},
			{ano: true, type: "ano", name: "Languages", text: "Cyrodiilic"},
			{ano: true, type: "ano", name: "Challenge", text: "2 (450 XP)"}
		]},
		feats: {attributes: [
			{ano: true, type: "ano", name: "Dark Devotion.", text: "The fanatic has advantage on saving throws against being charmed or frightened"},
			{ano: true, type: "ano", name: "Spellcasting.", text: "The fanatic is a 4th-level spellcaster. Its spellcasting ability is Wisdom (spell save DC 11, +3 to hit with spell attacks). The fanatic has the following cleric spells prepared:"},
			{par: true, type: "par", text: "Cantrips (at will): <i>light</i>, <i>sacred flame</i>, <i>thaumaturgy</i><br/>1st level (4 slots): <i>command</i>, <i>inflict wounds</i>, <i>shield of faith</i><br/>2nd level (3 slots): <i>hold person</i>, <i>spiritual weapon</i>"}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Multiattack.", text: "The fanatic makes two melee attacks"},
			{ano: true, type: "ano", name: "Dagger.", text: "<i>Melee Weapon Attack</i>: +4 to hit, reach 5 ft., one creature. Hit: <b class=\"die dmg pierce\">4 (1d4 + 2)</b> piercing damage."}
		]}
	};
	
	return creature;
}