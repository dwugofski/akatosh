<?php $razur_character = [
	'name' => "Razur", 
	'race' => "Khajiit",
	'clss' => [
		['name' => "Ranger", 'level' => "3"]
	],
	'level' => 3,
	'alignment' => "Chaotic Good",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Armor Class", 'text' => "17 (chain armor)"],
		['ano' => true, 'type' =>"ano", 'name' => "Hit Points", 'text' => "28 (2d10 + 16)"],
		['ano' => true, 'type' =>"ano", 'name' => "Speed", 'text' => "40ft"]
	]],
	'STR' => "15 (+2)",
	'DEX' => "17 (+3)",
	'CON' => "14 (+2)",
	'INT' => "9 (-1)",
	'WIS' => "13 (+1)",
	'CHA' => "13 (+1)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Saving Throw Proficiencies", 'text' => "Strength, Dexterity"],
		['ano' => true, 'type' =>"ano", 'name' => "Skill Proficiencies", 'text' => "Insight, Nature, Perception, Persuasion, Stealth"],
		['ano' => true, 'type' =>"ano", 'name' => "Equipment Proficiencies", 'text' => "Unarmed, simple weapons, martial weapons, medium armor, light armor, carpenter's tools"],
		['ano' => true, 'type' =>"ano", 'name' => "Languages", 'text' => "Cyrodiilic"]
	]],
	'skills' => ['group' => [
		['skill' => [
		['name' => "Acrobatics", 'ability' => "DEX", 'mod' => "+5"],
		['name' => "Animal Handling", 'ability' => "WIS", 'mod' => "+1"],
		['name' => "Arcana", 'ability' => "INT", 'mod' => "-1"]
		]],
		['skill' => [
		['name' => "Athletics", 'ability' => "STR", 'mod' => "+2"],
		['name' => "Deception", 'ability' => "CHA", 'mod' => "+1"],
		['name' => "History", 'ability' => "INT", 'mod' => "-1"]
		]],
		['skill' => [
		['name' => "Insight", 'ability' => "WIS", 'mod' => "+3"],
		['name' => "Intimidation", 'ability' => "CHA", 'mod' => "+1"],
		['name' => "Investigation", 'ability' => "INT", 'mod' => "-1"]
		]],
		['skill' => [
		['name' => "Medicine", 'ability' => "WIS", 'mod' => "+1"],
		['name' => "Nature", 'ability' => "INT", 'mod' => "+1"],
		['name' => "Perception", 'ability' => "WIS", 'mod' => "+3"]
		]],
		['skill' => [
		['name' => "Performance", 'ability' => "CHA", 'mod' => "+1"],
		['name' => "Persuasion", 'ability' => "CHA", 'mod' => "+3"],
		['name' => "Religion", 'ability' => "INT", 'mod' => "-1"]
		]],
		['skill' => [
		['name' => "Sleight of Hand", 'ability' => "DEX", 'mod' => "+4"],
		['name' => "Stealth", 'ability' => "DEX", 'mod' => "+6"],
		['name' => "Survival", 'ability' => "WIS", 'mod' => "+1"]
		]]
	]],
	'features' => ['feat_sects' => [
		['section' => "Racial Features: Khajiit", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Eye of Night", 'text' => "Once per long rest, a Khajiit can cast Night Eye, granting them Darkvision (60 ft) for 30 secs."],
		['ano' => true, 'type' =>"ano", 'name' =>"Eye of Fear", 'text' => "Once per long rest, a Khajiit can demoralize a target, forcing them to make a WIS saving throw against 8 + the player's CHA modifier or run away in fear."],
		['ano' => true, 'type' =>"ano", 'name' =>"Beast Claws", 'text' => "Khajiit can use their proficiency with their claws to deal 1d6 slashing damage unarmed."]
		]],
		['section' => "Class Features: Ranger", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Favored Enemy: Undead", 'text' => "You gain advantage on all WIS (Survival) checks made to track undead creatures. Additionally, you gain advantage on all skill checks to recall information related to the undead or necromantic rituals."],
		['ano' => true, 'type' =>"ano", 'name' => "Natural Terrain: Forest", 'text' => "Difficult terrain in forests does not slow you down. The group cannot become lost in forests except by magical means. You are always alert to the dangers of the forest. When alone, you can move stealthily at a normal space. You find twice as much food when foraging. When tracking things in the forest, you can immediately learn the size, number, movement direction, and time of passage of the tracked creatures."],
		['ano' => true, 'type' =>"ano", 'name' => "Fighting Style: Two-Weapon Fighting", 'text' => "When you engage in two-weapon fighting, you can add your ability modifier to the damage of the second attack."]
		]],
		['section' => "Class Features: Ranger Beast Master Archetype", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Ranger&rsquo;s Companion", 'text' => "You have a wolf companion, Gizmo, who objeys your commands. Gizmo has all the stats of a wolf, and four times your ranger level in hit points. You can add your proficiency bonus to any attack rolls Gizmo makes. Gizmo will take his turns on your initiative, but will not take any actions unless commanded to do so. You can use your action to verbally command Gizmo to take the Attack, Dash, Disengage, Dodge, or Help actions. "]
		]]
	]],
	'atks' => ['attributes' => [
		['wep' => true, 'type' =>"wep", 'name' => "Steel Shortsword x2", 'type' => "Martial Melee Weapon Attack", 'text' => "reach 5ft, <i>Finesse</i>, one target +6 to hit. Hit: 1d6 + 4 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Imperial Longbow", 'type' => "Martial Ranged Weapon Attack", 'text' => "range 150/600, one target +6 to hit. Hit: 1d10 + 4 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Claws", 'type' => "Melee Weapon Attack", 'text' => "reach 5ft, <i>Finesse</i>, one target +6 to hit. Hit: 1d6 slashing damage."]
	]],
	'spellist' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Spell save DC", 'text' => "11"],
		['ano' => true, 'type' =>"ano", 'name' =>"Spell attack modifier", 'text' => "+3"]
	], 'levels' => [
		['cantrip' => false, 'level' => 1, 'slots' => 3, 'spells' => [
		['name' => "Detect Magic", 'prepped' => true, 'sname' => "detectmagic"],
		['name' => "Detect Poison and Disease", 'prepped' => true, 'sname' => "detectpoisonanddisease"],
		['name' => "Hail of Thorns", 'prepped' => true, 'sname' => "hailofthorns"]
		]]
	]]
]; ?>