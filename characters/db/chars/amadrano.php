<?php $amadrano_character = [
	'name' => "Amadrano", 
	'race' => "Altmer",
	'clss' => [
		['name' => "Wizard", 'level' => 4]
	],
	'level' => 4,
	'alignment' => "Neutral",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Armor Class", 'text' => "12 (unarmored)"],
		['ano' => true, 'type' =>"ano", 'name' => "Hit Points", 'text' => "21 (4d6 + 10)"],
		['ano' => true, 'type' =>"ano", 'name' => "Speed", 'text' => "30ft"]
	]],
	'STR' => "12 (+1)",
	'DEX' => "15 (+2)",
	'CON' => "12 (+1)",
	'INT' => "20 (+5)",
	'WIS' => "12 (+1)",
	'CHA' => "9 (-1)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Saving Throw Proficiencies", 'text' => "Intelligence, Wisdom"],
		['ano' => true, 'type' =>"ano", 'name' => "Skill Proficiencies", 'text' => "Arcana, Athletics, Investigation, Survival"],
		['ano' => true, 'type' =>"ano", 'name' => "Equipment Proficiencies", 'text' => "Daggers, darts, quarterstaffs, light crossbows, destruction magic (add proficiency to spell damage)"],
		['ano' => true, 'type' =>"ano", 'name' => "Languages", 'text' => "Cyrodiilic"]
	]],
	'savings' => "Intelligence, Wisdom",
	'skill_prof' => "Arcana, Athletics, Investigation, Survival",
	'equp_prof' => "Daggers, darts, quarterstaffs, light crossbows, destruction magic (add proficiency to spell damage)",
	'langs' => "Cyrodiilic",
	'skills' => ['group' => [
		['skill' => [
		['name' => "Acrobatics", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Animal Handling", 'ability' => "WIS", 'mod' => "+1"],
		['name' => "Arcana", 'ability' => "INT", 'mod' => "+8"]
		]],
		['skill' => [
		['name' => "Athletics", 'ability' => "STR", 'mod' => "+3"],
		['name' => "Deception", 'ability' => "CHA", 'mod' => "-1"],
		['name' => "History", 'ability' => "INT", 'mod' => "+6"]
		]],
		['skill' => [
		['name' => "Insight", 'ability' => "WIS", 'mod' => "+1"],
		['name' => "Intimidation", 'ability' => "CHA", 'mod' => "-1"],
		['name' => "Investigation", 'ability' => "INT", 'mod' => "+7"]
		]],
		['skill' => [
		['name' => "Medicine", 'ability' => "WIS", 'mod' => "+1"],
		['name' => "Nature", 'ability' => "INT", 'mod' => "+5"],
		['name' => "Perception", 'ability' => "WIS", 'mod' => "+1"]
		]],
		['skill' => [
		['name' => "Performance", 'ability' => "CHA", 'mod' => "-1"],
		['name' => "Persuasion", 'ability' => "CHA", 'mod' => "-1"],
		['name' => "Religion", 'ability' => "INT", 'mod' => "+5"]
		]],
		['skill' => [
		['name' => "Sleight of Hand", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Stealth", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Survival", 'ability' => "WIS", 'mod' => "+3"]
		]]
	]],
	'features' => ['feat_sects' => [
		['section' => "Racial Features: Altmer", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Resist Common Disease", 'text' => "Altmer have a +3 bonus on saving throws against diseases."],
		['ano' => true, 'type' =>"ano", 'name' =>"Magicka Weakness", 'text' => "Altmer suffer an additional +1 damage when damaged by spells."],
		['ano' => true, 'type' =>"ano", 'name' =>"Magicka Fortrification", 'text' => "Altmer gain additional spell slots at all available spell levels equal to their INT modifier."],
		['ano' => true, 'type' =>"ano", 'name' =>"Destruction Magic", 'text' => "Altmer add their proficiency bonus to the damage of spells they cast."]
		]],
		['section' => "Background Features: Outlander", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Wanderer", 'text' => "I have an excellent memory for maps and geography, and I can always recall the general layout of terrain, settlements, and other features around me. In addition, I can find food and fresh water for myself and up to five other people each day, provided the land offers berries, small game, water, and so forth."]
		]],
		['section' => "Class Features: Wizard", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Arcane Recovery", 'text' => "Once per day I can take a short rest and recover a number of spell slots up to half my wizard level."],
		['ano' => true, 'type' =>"ano", 'name' =>"Necromancy Savant", 'text' => "The gold and time you must spend to copy a necromancy spell into your spellbook is halved."],
		['ano' => true, 'type' =>"ano", 'name' =>"Grim Harvest", 'text' => "You gain the ability to reap life energy from creatures you kill with your spells. Once per turn when you kill one or more creatures with a spell of 1st level or higher, you regain hit points equal to twice the spell's level, or three times its level if the spell belongs to the School of Necromancy. You don't gain this benefit for killing constructs or undead."]
		]]
	]],
	'atks' => ['attributes' => [
		['wep' => true, 'type' =>"wep", 'name' => "Crossbow", 'type' => "Simple Ranged Weapon Attack", 'text' => "range 80/320, one target. Hit: 1d8 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Dagger", 'type' => "Melee Weapon Attack", 'text' => "reach 5 ft, <i>Finesse</i>, one target. Hit: 1d4 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Dart", 'type' => "Simple Ranged Weapon Attack", 'text' => "thrown 20/60, <i>Finesse</i>, one target. Hit: 1d4 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Quarterstaff", 'type' => "Melee Weapon Attack", 'text' => "reach 5 ft, one target. Hit: 1d6 bludgeoning damage, <i>Versatile (1d8)</i>."]
	]],
	'spellist' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Spell save DC", 'text' => "18"],
		['ano' => true, 'type' =>"ano", 'name' =>"Spell attack modifier", 'text' => "+8"]
	], 'levels' => [
		['cantrip' => true, 'spells' => [
		['name' => "Chill Touch", 'sname' => "chilltouch"],
		['name' => "Fire Bolt", 'sname' => "firebolt"],
		['name' => "Poison Spray", 'sname' => "poisonspray"]
		]],
		['cantrip' => false, 'level' => 1, 'slots' => 9, 'spells' => [
		['name' => "Burning Hands", 'prepped' => false, 'sname' => "burninghands"],
		['name' => "Color Spray", 'prepped' => false, 'sname' => "colorspray"],
		['name' => "Chromatic Orb", 'prepped' => true, 'sname' => "chromaticorb"],
		['name' => "False Life", 'prepped' => true, 'sname' => "falselife"],
		['name' => "Magic Missile", 'prepped' => false, 'sname' => "magicmissile"],
		['name' => "Ray of Sickness", 'prepped' => true, 'sname' => "rayofsickness"],
		['name' => "Thunderwave", 'prepped' => true, 'sname' => "thunderwave"],
		['name' => "Witch Bolt", 'prepped' => true, 'sname' => "witchbolt"]
		]],
		['cantrip' => false, 'level' => 2, 'slots' => 8, 'spells' => [
		['name' => "Cloud of Daggers", 'prepped' => true, 'sname' => "cloudofdaggers"],
		['name' => "Melf's Acid Arrow", 'prepped' => true, 'sname' => "melfsacidarrow"],
		['name' => "Phantasmal Force", 'prepped' => true, 'sname' => "phantasmalforce"],
		['name' => "Alter Self", 'prepped' => true, 'sname' => "alterself"]
		]]
	]]
]; ?>