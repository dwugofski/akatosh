
function dragoncultacolyte() {
	var creature = {
		name: "Dragon Cult Acolyte",
		size: "Medium",
		type: "humanoid",
		alignment: "Lawful Evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "10 (leather armor)"},
			{ano: true, type: "ano", name: "Hit Points", text: "9 (2d8 )"},
			{ano: true, type: "ano", name: "Speed", text: "30ft"}
		]},
		STR: "10 (+0)",
		DEX: "10 (+0)",
		CON: "10 (+0)",
		INT: "10 (+0)",
		WIS: "14 (+2)",
		CHA: "10 (+0)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Skills", text: "Medicine +4, Religion +2"},
			{ano: true, type: "ano", name: "Senses", text: "passive Perception 12"},
			{ano: true, type: "ano", name: "Languages", text: "any one language (usually Cyrodiilic)"},
			{ano: true, type: "ano", name: "Challenge", text: "1/4 (50 XP)"}
		]},
		feats: {attributes: [
			{ano: true, type: "ano", name: "Spellcasting", text: "The acolyte is a 1st-level spellcaster. Its spellcasting ability is Wisdom (spell save DC 12, +4 to hit with spell attacks). The acolyte has the following cleric spells prepared:"},
			{par:true, type:"par", text:"<b>Cantrips</b> (at will): <i>light, sacred flame, thaumaturgy</i><br/><b>1st level</b> (3 slots): <i>searing smite, hex, sanctuary</i>"}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Club.", text: "<i>Melee Weapon Attack</i>: +2 to hit, reach 5 ft., one creature. Hit: <b class=\"die dmg bludge\">2 (1d4)</b> bludgeoning damage."}
		]}
	};
	
	return creature;
}