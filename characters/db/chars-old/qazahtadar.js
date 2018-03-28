function qazahtadar() {
	
	var character = {
		name: "Qa&rsquo;Zahta-Dar", 
		race: "Khajiit",
		clss: [
			{name: "Wizard", level: "3"}
		],
		level: 3,
		alignment: "Lawful Neutral",
		top_props: {attributes: [
			{ano:true, type:"ano", name: "Armor Class", text: "11 (unarmored)"},
			{ano:true, type:"ano", name: "Hit Points", text: "23 (2d6 + 15)"},
			{ano:true, type:"ano", name: "Speed", text: "30ft"}
		]},
		STR: "10 (0)",
		DEX: "13 (+1)",
		CON: "16 (+3)",
		INT: "17 (+3)",
		WIS: "17 (+3)",
		CHA: "15 (+2)",
		bot_props: {attributes: [
			{ano:true, type:"ano", name: "Saving Throw Proficiencies", text: "Intelligence, Wisdom"},
			{ano:true, type:"ano", name: "Skill Proficiencies", text: "Acrobatics, Arcana, History, Persuasion"},
			{ano:true, type:"ano", name: "Equipment Proficiencies", text: "Darts, quarterstaff, light crossbow, daggers"},
			{ano:true, type:"ano", name: "Languages", text: "Cyrodiilic, Ta'agra, Aldmeri, Jel (can&rsquo;t speak)"}
		]},
		skills: {group: [
			{skill: [
				{name: "Acrobatics", ability: "DEX", mod: "+5"},
				{name: "Animal Handling", ability: "WIS", mod: "+3"},
				{name: "Arcana", ability: "INT", mod: "+6"}
			]},
			{skill: [
				{name: "Athletics", ability: "STR", mod: "+1"},
				{name: "Deception", ability: "CHA", mod: "+2"},
				{name: "History", ability: "INT", mod: "+5"}
			]},
			{skill: [
				{name: "Insight", ability: "WIS", mod: "+3"},
				{name: "Intimidation", ability: "CHA", mod: "+2"},
				{name: "Investigation", ability: "INT", mod: "+3"}
			]},
			{skill: [
				{name: "Medicine", ability: "WIS", mod: "+3"},
				{name: "Nature", ability: "INT", mod: "+3"},
				{name: "Perception", ability: "WIS", mod: "+3"}
			]},
			{skill: [
				{name: "Performance", ability: "CHA", mod: "+2"},
				{name: "Persuasion", ability: "CHA", mod: "+4"},
				{name: "Religion", ability: "INT", mod: "+3"}
			]},
			{skill: [
				{name: "Sleight of Hand", ability: "DEX", mod: "+2"},
				{name: "Stealth", ability: "DEX", mod: "+1"},
				{name: "Survival", ability: "WIS", mod: "+3"}
			]}
		]},
		features: {feat_sects: [
			{section: "Racial Features: Khajiit", attributes: [
				{ano:true, type:"ano", name:"Night Eye", text: "Khajiit can use Night Eye once per long rest, granting them Darkvision 30ft for 3 turns."},
				{ano:true, type:"ano", name:"Beast Claws", text: "Khajiit can deal a 1d6 (slashing) damage unarmed."}
			]},
			{section: "Background Features: Sage ", attributes: [
				{ano:true, type:"ano", name:"Researcher", text: "I know where to find most recorded information."}
			]},
			{section: "Class Features: Wizard", attributes: [
				{ano:true, type:"ano", name:"Arcane Recovery", text: "Once per day I can take a short rest and recover a number of spell slots up to half my wizard level."},
				{ano:true, type:"ano", name:"Necromancy Savant", text: "The gold and time you must spend to copy a necromancy spell into your spellbook is halved."},
				{ano:true, type:"ano", name:"Grim Harvest", text: "You gain the ability to reap life energy from creatures you kill with your spells. Once per turn when you kill one or more creatures with a spell of 1st level or higher, you regain hit points equal to twice the spell's level, or three times its level if the spell belongs to the School of Necromancy. You don't gain this benefit for killing constructs or undead."}
			]}
		]},
		atks: {attributes: [
			{wep:true, type:"wep", name: "Claws", type: "Melee Weapon Attack", text: "reach 5ft, <i>Finesse</i>, one target. Hit: 1d6 slashing damage."},
			{wep:true, type:"wep", name: "Crossbow", type: "Simple Ranged Weapon Attack", text: "range 80/320, one target. Hit: 1d8 piercing damage."},
			{wep:true, type:"wep", name: "Dagger", type: "Melee Weapon Attack", text: "reach 5 ft, <i>Finesse</i>, one target. Hit: 1d4 piercing damage."},
			{wep:true, type:"wep", name: "Dart", type: "Simple Ranged Weapon Attack", text: "thrown 20/60, <i>Finesse</i>, one target. Hit: 1d4 piercing damage."},
			{wep:true, type:"wep", name: "Quarterstaff", type: "Melee Weapon Attack", text: "reach 5 ft, one target. Hit: 1d6 bludgeoning damage, <i>Versatile (1d8)</i>."}
		]},
		spellist: {attributes: [
			{ano:true, type:"ano", name:"Spell save DC", text: "13"},
			{ano:true, type:"ano", name:"Spell attack modifier", text: "+5"}
		], levels: [
			{cantrip: true, spells: [
				{name: "Dancing Lights", sname: "dancinglights"},
				{name: "Poison Spray", sname: "poisonspray"},
				{name: "Prestidigitation", sname: "prestidigitation"}
			]},
			{cantrip: false, level: 1, slots: 4, spells: [
				{name: "Alarm", prepped: false, sname: "alarm"},
				{name: "False Life", prepped: true, sname: "falselife"},
				{name: "Feather Fall", prepped: false, sname: "featherfall"},
				{name: "Fog Cloud", prepped: false, sname: "fogcloud"},
				{name: "Mage Armor", prepped: true, sname: "magearmor"},
				{name: "Magic Missile", prepped: true, sname: "magicmissile"},
				{name: "Ray of Sickness", prepped: false, sname: "rayofsickness"},
				{name: "Shield", prepped: true, sname: "shield"}
			]},
			{cantrip: false, level: 2, slots: 2, spells: [
				{name: "Web", prepped: true, sname: "web"},
				{name: "Shatter", prepped: true, sname: "shatter"},
				{name: "Summon Lesser Daedra", prepped: false, sname: "summonlesserdaedra"}
			]}
		]}
	};

	return character;
}