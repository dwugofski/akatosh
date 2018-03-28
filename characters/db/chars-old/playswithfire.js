function playswithfire() {
	
	var character = {
		name: "Plays-With-Fire", 
		race: "Argonian",
		clss: [
			{name: "Warlock", level: "3"}
		],
		level: 3,
		alignment: "Neutral Good",
		top_props: {attributes: [
			{ano:true, type:"ano", name: "Armor Class", text: "15 (light armor)"},
			{ano:true, type:"ano", name: "Hit Points", text: "27 (2d8 + 11)"},
			{ano:true, type:"ano", name: "Speed", text: "40ft, 50ft (swimming)"}
		]},
		STR: "6 (-2)",
		DEX: "14 (+2)",
		CON: "14 (+2)",
		INT: "14 (+2)",
		WIS: "8 (-1)",
		CHA: "18 (+4)",
		bot_props: {attributes: [
			{ano:true, type:"ano", name: "Saving Throw Proficiencies", text: "Intelligence, Wisdom, Charisma"},
			{ano:true, type:"ano", name: "Skill Proficiencies", text: "Arcana, Deception, Intimidation, Sleight of Hand"},
			{ano:true, type:"ano", name: "Equipment Proficiencies", text: "Light armor, medium armor, simple weapons, unarmed"},
			{ano:true, type:"ano", name: "Languages", text: "Cyrodiilic, Jel"}
		]},
		skills: {group: [
			{skill: [
				{name: "Acrobatics", ability: "DEX", mod: "+2"},
				{name: "Animal Handling", ability: "WIS", mod: "-1"},
				{name: "Arcana", ability: "INT", mod: "+4"}
			]},
			{skill: [
				{name: "Athletics", ability: "STR", mod: "-2"},
				{name: "Deception", ability: "CHA", mod: "+6"},
				{name: "History", ability: "INT", mod: "+2"}
			]},
			{skill: [
				{name: "Insight", ability: "WIS", mod: "-1"},
				{name: "Intimidation", ability: "CHA", mod: "+6"},
				{name: "Investigation", ability: "INT", mod: "+2"}
			]},
			{skill: [
				{name: "Medicine", ability: "WIS", mod: "-1"},
				{name: "Nature", ability: "INT", mod: "+2"},
				{name: "Perception", ability: "WIS", mod: "-1"}
			]},
			{skill: [
				{name: "Performance", ability: "CHA", mod: "+4"},
				{name: "Persuasion", ability: "CHA", mod: "+4"},
				{name: "Religion", ability: "INT", mod: "+2"}
			]},
			{skill: [
				{name: "Sleight of Hand", ability: "DEX", mod: "+4"},
				{name: "Stealth", ability: "DEX", mod: "+2"},
				{name: "Survival", ability: "WIS", mod: "-1"}
			]}
		]},
		features: {feat_sects: [
			{section: "Racial Features: Argonian", attributes: [
				{ano:true, type:"ano", name:"Water Breathing", text: "Argonians can breathe underwater."},
				{ano:true, type:"ano", name:"Poison Immunity", text: "Argonians are immune to poison damage."},
				{ano:true, type:"ano", name:"Resist Common Disease", text: "Argonians have a +3 bonus to saving throws against diseases."},
				{ano:true, type:"ano", name:"Swamp Swimmers", text: "Argonians' swimming speed is their base land speed + 10, and they do not suffer movement penalties moving through swampy terrain."},
				{ano:true, type:"ano", name:"Beast Claws", text: "Argonians can deal a 1d6 (slashing) damage unarmed."}
			]},
			{section: "Background Features: Charlatan", attributes: [
				{ano:true, type:"ano", name:"False Identity", text: "I have a Second identity (<b>Olik-Shei</b>) including documentation, established aquaintances, and disguises. I can also forge documents as long as I've seen an example beforehand."}
			]},
			{section: "Class Features: Warlock", attributes: [
				{ano:true, type:"ano", name:"The Dark One's Blessing", text: "When you reduce a hostile creature to 0 hit points, you gain temporary hit points equal to your CHA modifier + your warlock level."}
			]},
			{section: "Invocations", attributes: [
				{ano:true, type:"ano", name:"Eye of the Rune Keeper", text: "You can read all writing."},
				{ano:true, type:"ano", name:"Beguiling Influence", text: "You gain proficiency in the Deception and Persuasion skills."}
			]}
		]},
		atks: {attributes: [
			{wep:true, type:"wep", name: "Enhanced Crossbow", type: "Simple Ranged Weapon Attack", text: "range 80/320, one target +5 to hit. Hit: 1d8+3 piercing damage."},
			{wep:true, type:"wep", name: "Claws", type: "Melee Weapon Attack", text: "reach 5ft, <i>Finesse</i>, one target +4 to hit. Hit: 1d6+2 slashing damage."}
		]},
		spellist: {attributes: [
			{ano:true, type:"ano", name:"Spell save DC", text: "11"},
			{ano:true, type:"ano", name:"Spell attack modifier", text: "+3"}
		], levels: [
			{cantrip: true, spells: [
				{name: "Blade Ward", sname: "bladeward"},
				{name: "Conductive Bolt", sname: "conductivebolt"},
				{name: "Eldrich Blast", sname: "eldrichblast"},
				{name: "Firebolt", sname: "firebolt"},
				{name: "Minor Illusion", sname: "minorillusion"},
				{name: "Poison Spray", sname: "poisonspray"},
				{name: "Sacred Flame", sname: "sacredflame"}
			]},
			{cantrip: false, level: 1, slots: 2, spells: [
				{name: "Conductive Ward", sname: "conductiveward"},
				{name: "Hellish Rebuke", sname: "hellishrebuke"},
				{name: "Arms of Hadar", sname: "armsofhadar"},
				{name: "Hex", sname: "hex"}
			]}
		]}
	};

	return character;
}