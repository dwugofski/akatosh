<?php $neradrystelvanni_character = [
	'name' => "Neradrys Telvanni", 
	'race' => "Dunmer",
	'clss' => [
		['name' => "Wizard", 'level' => "4"]
	],
	'level' => 3,
	'alignment' => "Neutral Good",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Armor Class", 'text' => "12 (unarmored)"],
		['ano' => true, 'type' =>"ano", 'name' => "Hit Points", 'text' => "22 (3d6 + 10)"],
		['ano' => true, 'type' =>"ano", 'name' => "Speed", 'text' => "30ft"]
	]],
	'STR' => "10 (0)",
	'DEX' => "14 (+2)",
	'CON' => "12 (+1)",
	'INT' => "18 (+4)",
	'WIS' => "10 (0)",
	'CHA' => "10 (0)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Saving Throw Proficiencies", 'text' => "Intelligence, Wisdom"],
		['ano' => true, 'type' =>"ano", 'name' => "Skill Proficiencies", 'text' => "Arcana, History, Insight, and Investigation"],
		['ano' => true, 'type' =>"ano", 'name' => "Equipment Proficiencies", 'text' => "Darts, quarterstaff, light crossbow, daggers, bows, bladed weapons"],
		['ano' => true, 'type' =>"ano", 'name' => "Languages", 'text' => "Cyrodiilic, Dunmeris, Ayleidoon, Atmoran"]
	]],
	'skills' => ['group' => [
		['skill' => [
		['name' => "Acrobatics", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Animal Handling", 'ability' => "WIS", 'mod' => "0"],
		['name' => "Arcana", 'ability' => "INT", 'mod' => "+7"]
		]],
		['skill' => [
		['name' => "Athletics", 'ability' => "STR", 'mod' => "+1"],
		['name' => "Deception", 'ability' => "CHA", 'mod' => "0"],
		['name' => "History", 'ability' => "INT", 'mod' => "+6"]
		]],
		['skill' => [
		['name' => "Insight", 'ability' => "WIS", 'mod' => "+2"],
		['name' => "Intimidation", 'ability' => "CHA", 'mod' => "0"],
		['name' => "Investigation", 'ability' => "INT", 'mod' => "+6"]
		]],
		['skill' => [
		['name' => "Medicine", 'ability' => "WIS", 'mod' => "0"],
		['name' => "Nature", 'ability' => "INT", 'mod' => "+4"],
		['name' => "Perception", 'ability' => "WIS", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Performance", 'ability' => "CHA", 'mod' => "0"],
		['name' => "Persuasion", 'ability' => "CHA", 'mod' => "0"],
		['name' => "Religion", 'ability' => "INT", 'mod' => "+4"]
		]],
		['skill' => [
		['name' => "Sleight of Hand", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Stealth", 'ability' => "DEX", 'mod' => "+3"],
		['name' => "Survival", 'ability' => "WIS", 'mod' => "+1"]
		]]
	]],
	'features' => ['feat_sects' => [
		['section' => "Racial Features: Dunmer", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => 'Ancestor Guardian', 'text' => 'Once per long rest Dunmer can cast Sanctuary on themselves, providing a +2 bonus to AC for 1 minute'],
		['ano' => true, 'type' =>"ano", 'name' => 'Resist Fire', 'text' => 'Fire attacks deal half damage against Dunmer'],
		['ano' => true, 'type' =>"ano", 'name' => 'Proficiency: Destruction Magic', 'text' => 'Dunmer can add their proficiency bonus to the damage roll of spells they cast']
		]],
		['section' => "Background Features: Sage ", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Researcher", 'text' => "I know where to find most recorded information."]
		]],
		['section' => "Class Features: Wizard", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Arcane Recovery", 'text' => "Once per day I can take a short rest and recover a number of spell slots up to half my wizard level."],
		['ano' => true, 'type' =>"ano", 'name' =>"Evocation Savant", 'text' => "The gold and time you must spend to copy an evocation spell into your spellbook is halved."],
		['ano' => true, 'type' =>"ano", 'name' =>"Sculpt Spells", 'text' => "You can create pockets of relative safety within the effects of your evocation spells. When you case an evocation spell that affects other creatures, you can choose up to 1 + the spell&rsquo;s level to automatically succeed saving throws against the spells and take no damage if the damage would be halved for a successful throw."]
		]],
		['section' => "Bonus Features", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Elemental Adept", 'text' => "Spells which deal fire damage ignore resistances. As well, if the result of a damage dice roll for a fire damage spell is a 1, treat it as a 2."]
		]]
	]],
	'atks' => ['attributes' => [
		['wep' => true, 'type' =>"wep", 'name' => "Dagger", 'type' => "Melee Weapon Attack", 'text' => "reach 5 ft, <i>Finesse</i>, one target. Hit: 1d4 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Darts", 'type' => "Simple Ranged Weapon Attack", 'text' => "thrown 20/60, <i>Finesse</i>, one target. Hit: 1d4 piercing damage."]
	]],
	'spellist' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Spell save DC", 'text' => "14"],
		['ano' => true, 'type' =>"ano", 'name' =>"Spell attack modifier", 'text' => "+6"]
	], 'levels' => [
		['cantrip' => true, 'spells' => [
		['name' => "Blade Ward", 'sname' => "bladeward"],
		['name' => "Fire Bolt", 'sname' => "firebolt"],
		['name' => "Mage Hand", 'sname' => "magehand"],
		['name' => "Shocking Grasp", 'sname' => "shockinggrasp"]
		]],
		['cantrip' => false, 'level' => 1, 'slots' => 4, 'spells' => [
		['name' => "Burning Hands", 'prepped' => false, 'sname' => "burninghands"],
		['name' => "Chromatic Orb", 'prepped' => false, 'sname' => "chromaticorb"],
		['name' => "Comprehend Languages", 'prepped' => false, 'sname' => "comprehendlanguages"],
		['name' => "Fog Cloud", 'prepped' => false, 'sname' => "fogcloud"],
		['name' => "Grease", 'prepped' => false, 'sname' => "grease"],
		['name' => "Sleep", 'prepped' => false, 'sname' => "sleep"],
		['name' => "Thunderwave", 'prepped' => false, 'sname' => "thunderwave"],
		['name' => "Witch Bolt", 'prepped' => false, 'sname' => "witchbolt"]
		]],
		['cantrip' => false, 'level' => 2, 'slots' => 3, 'spells' => [
		['name' => "Gust of Wind", 'prepped' => true, 'sname' => "gustofwind"],
		['name' => "Levitate", 'prepped' => true, 'sname' => "levitate"],
		['name' => "Misty Step", 'prepped' => true, 'sname' => "mistystep"],
		['name' => "Scorching Ray", 'prepped' => true, 'sname' => "scorchingray"]
		]]
	]]
]; ?>