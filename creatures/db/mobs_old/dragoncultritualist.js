
function dragoncultritualist() {
	var creature = {
		name: "Dragon Cult Ritualist",
		size: "Medium",
		type: "humanoid",
		alignment: "Lawful Evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "12 (15 with <i>mage armor</i>)"},
			{ano: true, type: "ano", name: "Hit Points", text: "40 (9d8)"},
			{ano: true, type: "ano", name: "Speed", text: "30ft"}
		]},
		STR: "9 (-1)",
		DEX: "14 (+2)",
		CON: "11 (+0)",
		INT: "17 (+3)",
		WIS: "12 (+1)",
		CHA: "11 (+0)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Saving Throws", text: "INT +6, WIS +4"},
			{ano: true, type: "ano", name: "Skills", text: "Arcana +6, History +6"},
			{ano: true, type: "ano", name: "Senses", text: "passive Perception 11"},
			{ano: true, type: "ano", name: "Languages", text: "Cyrodiilic, Dragon, Falmeris, and Dwemeris"},
			{ano: true, type: "ano", name: "Challenge", text: "6 (2,300 XP)"}
		]},
		feats: {attributes: [
			{ano: true, type: "ano", name: "Spellcasting.", text: "The ritualist is a 9th-level spellcaster. Its spellcasting ability is Intelligence (DC 14, +6 to hit with spell attacks). The mage has the following wizard spells prepared:"},
			{par: true, type: "par", text: "Cantrips (at will): <i>fire bolt, light, mage hand, prestidigitation</i><br/>1st level (4 slots): <i>detect magic, mage armor, magic missile, shield</i><br/>2nd level (3 slots): <i>misty step, suggestion</i><br/>4th level (3 slots): <i>greater invisibility, ice storm</i><br/>5th level (1 slot): <i>cone of cold</i>"}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Dagger.", text: "<i>Melee Weapon Attack</i>: +4 to hit, reach 5 ft., one creature. Hit: <b class=\"die dmg pierce\">4 (1d4 + 2)</b> piercing damage."}
		]}
	};
	
	return creature;
}