function gizmo() {
	
	var character = {
		name: "Gizmo", 
		race: "Wolf",
		clss: [
			{name: "Companion", level: "3"}
		],
		level: 3,
		alignment: "Unaligned",
		top_props: {attributes: [
			{ano:true, type:"ano", name: "Armor Class", text: "15 (natural armor, Ranger prof. bonus)"},
			{ano:true, type:"ano", name: "Hit Points", text: "12 (2d8 + 2, 4 * Ranger Level)"},
			{ano:true, type:"ano", name: "Speed", text: "40ft"}
		]},
		STR: "12 (+1)",
		DEX: "15 (+2)",
		CON: "12 (+1)",
		INT: "3 (-4)",
		WIS: "12 (+1)",
		CHA: "6 (-2)",
		bot_props: {attributes: [
			{ano:true, type:"ano", name: "Skill Bonuses", text: "Perception +3, Stealth +4"},
			{ano:true, type:"ano", name: "Senses", text: "Passive Perception 15"},
			{ano:true, type:"ano", name: "Languages", text: "&mdash;"}
		]},
		skills: {group: [
			{skill: [
				{name: "Acrobatics", ability: "DEX", mod: "+2"},
				{name: "Animal Handling", ability: "WIS", mod: "+1"},
				{name: "Arcana", ability: "INT", mod: "-4"}
			]},
			{skill: [
				{name: "Athletics", ability: "STR", mod: "+1"},
				{name: "Deception", ability: "CHA", mod: "-2"},
				{name: "History", ability: "INT", mod: "-4"}
			]},
			{skill: [
				{name: "Insight", ability: "WIS", mod: "+1"},
				{name: "Intimidation", ability: "CHA", mod: "-2"},
				{name: "Investigation", ability: "INT", mod: "-4"}
			]},
			{skill: [
				{name: "Medicine", ability: "WIS", mod: "+1"},
				{name: "Nature", ability: "INT", mod: "-4"},
				{name: "Perception", ability: "WIS", mod: "+5"}
			]},
			{skill: [
				{name: "Performance", ability: "CHA", mod: "-2"},
				{name: "Persuasion", ability: "CHA", mod: "-2"},
				{name: "Religion", ability: "INT", mod: "-4"}
			]},
			{skill: [
				{name: "Sleight of Hand", ability: "DEX", mod: "+2"},
				{name: "Stealth", ability: "DEX", mod: "+6"},
				{name: "Survival", ability: "WIS", mod: "+1"}
			]}
		]},
		features: {feat_sects: [
			{section: "Master Bonuses", attributes: [
				{ano:true, type:"ano", name:"Proficiency Bonuses", text: "Add your master&rsquo;s proficiency bonus to any attack rolls, damage rolls, and saving throws, and skills you are proficient in."}
			]},
			{section: "Wolf Features", attributes: [
				{ano:true, type:"ano", name:"Keen Hearing and Smell", text: "You have advantage on WIS (Perception) checks that rely on hearing or smell"},
				{ano:true, type:"ano", name:"Pack Tactics", text: "You have advantage on attack rolls against a creature if at least one of your allies is within 5 feet of the creature and the ally isn&rsquo;t incapacitated."}
			]}
		]},
		atks: {attributes: [
			{wep:true, type:"wep", name: "Bite", type: "Melee Weapon Attack", text: "+5 to hit, reach 5 ft., one target. <i>Hit</i>: 9 (2d4 + 4) piercing damage. If the target is a creature, it must succeed a DC 11 STR saving throw or be knocked prone."}
		]}
	};

	return character;
}