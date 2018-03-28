<?php $darusuprene_character = [
	'name' => "Darus Uprene", 
	'race' => "Imperial",
	'clss' => [
		['name' => "Bard", 'level' => "3"]
	],
	'level' => 3,
	'alignment' => "Chaotic Good",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Armor Class", 'text' => "16 (studded leather armor)"],
		['ano' => true, 'type' =>"ano", 'name' => "Hit Points", 'text' => "21 (2d8 + 11)"],
		['ano' => true, 'type' =>"ano", 'name' => "Speed", 'text' => "30ft"]
	]],
	'STR' => "12 (+1)",
	'DEX' => "15 (+2)",
	'CON' => "12 (+1)",
	'INT' => "14 (+2)",
	'WIS' => "9 (-1)",
	'CHA' => "22 (+6)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Saving Throw Proficiencies", 'text' => "Dexterity (+4), Charisma (+8)"],
		['ano' => true, 'type' =>"ano", 'name' => "Skill Proficiencies", 'text' => "Acrobatics, History, Investigation, Performance, Sleight of Hand, Stealth"],
		['ano' => true, 'type' =>"ano", 'name' => "Equipment Proficiencies", 'text' => "Simple weapons, light armor,  rapier, hand crossbow, longsword, shortsword, unarmed, blunt weapons, mercantilism, lute, flute, harp"],
		['ano' => true, 'type' =>"ano", 'name' => "Languages", 'text' => "Cyrodiilic"]
	]],
	'skills' => ['group' => [
		['skill' => [
		['name' => "Acrobatics", 'ability' => "DEX", 'mod' => "+4"],
		['name' => "Animal Handling", 'ability' => "WIS", 'mod' => "-1"],
		['name' => "Arcana", 'ability' => "INT", 'mod' => "+2"]
		]],
		['skill' => [
		['name' => "Athletics", 'ability' => "STR", 'mod' => "+1"],
		['name' => "Deception", 'ability' => "CHA", 'mod' => "+7"],
		['name' => "History", 'ability' => "INT", 'mod' => "+4"]
		]],
		['skill' => [
		['name' => "Insight", 'ability' => "WIS", 'mod' => "-1"],
		['name' => "Intimidation", 'ability' => "CHA", 'mod' => "+6"],
		['name' => "Investigation", 'ability' => "INT", 'mod' => "+6"]
		]],
		['skill' => [
		['name' => "Medicine", 'ability' => "WIS", 'mod' => "-1"],
		['name' => "Nature", 'ability' => "INT", 'mod' => "+2"],
		['name' => "Perception", 'ability' => "WIS", 'mod' => "-1"]
		]],
		['skill' => [
		['name' => "Performance", 'ability' => "CHA", 'mod' => "+8"],
		['name' => "Persuasion", 'ability' => "CHA", 'mod' => "+8"],
		['name' => "Religion", 'ability' => "INT", 'mod' => "+3"]
		]],
		['skill' => [
		['name' => "Sleight of Hand", 'ability' => "DEX", 'mod' => "+4"],
		['name' => "Stealth", 'ability' => "DEX", 'mod' => "+6"],
		['name' => "Survival", 'ability' => "WIS", 'mod' => "-1"]
		]]
	]],
	'features' => ['feat_sects' => [
		['section' => "Racial Features: Imperial", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Star of the West", 'text' => "Once per long rest, Imperials can reduce a creature's STR mod by 1 and increase their STR mod by 1."],
		['ano' => true, 'type' =>"ano", 'name' =>"Voice of the Emperor", 'text' => "Once per long rest, Imperials can charm a target for 15 seconds, gaining advantage on all skill rolls involving the CHA ability."]
		]],
		['section' => "Class Features: Bard", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Bardic Inspiration", 'text' => "You can inspire others through stirring words or music. To do so, you use a bonus action on your turn to choose one creature other than yourself within 60 feet of you who can hear you. That creature gains one Bardic Inspiration die, a <b class=\"d\">d6</b>"],
		['par' => true, 'type' => "par", 'text' => "Once within the next 10 minutes, the creature can roll the die and add the number rolled to one ability check, attack roll, or saving throw it makes. The creature can wait until after it rolls the d20 before deciding to use the Bardic Inspiration die, but must decide before the DM says whether the roll succeeds or fails. Once the Bardic Inspiration die is rolled, it is lost. A creature can only have one Bardic Inspiration die at a time."],
		['par' => true, 'type' => "par", 'text' => "You can use this feature a number of times per day equal to your Charisma modifier (a minimum of once). You regain any expended uses when you finish a long rest."],
		['par' => true, 'type' => "par", 'text' => "Your Bardic Inspiration die changes when you reach certain levels in this class. The die becomes a <b class=\"die\">d8</b> at 5th level, a <b class=\"die\">d10</b> at 10th level, and a <b class=\"die\">d12</b> at 15th level."],
		['ano' => true, 'type' =>"ano", 'name' => "Jack of All Trades", 'text' => "You can add half your proficiency bonus, rounded down, to any ability check you make that doesn&rsquo;t already include your proficiency bonus."],
		['ano' => true, 'type' =>"ano", 'name' => "Song of Rest", 'text' => "You can use soothing music or oration to help revitalize your wounded allies during a short rest. If you or any friendly creatures who can hear your performance regain hit points at the end of the short rest by spending one or more Hit Dice, each of those creatres regains an extra <b class=\"die\">1d6</b> hit points."],
		['par' => true, 'type' => "par", 'text' => "The extra hit points increase when you reach certain levels in this class: to <b class=\"die\">1d8</b> at 8th level, to <b class=\"die\">1d10</b> at 13th level, and to <b class=\"die\">1d12</b> at 17th level."],
		['ano' => true, 'type' =>"ano", 'name' => "Expertise", 'text' => "Choose two of your skill proficiencies. Your proficiency bonus is doubled for any ability check you make that uses either of the chosen proficiencies. At 10th level, you can choose another two skill proficiencies to gain this benefit."]
		]],
		['section' => "Class Features: Bard College of Lore", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Bonus Proficiencies", 'text' => "You gain proficiency with three skills of your choice."],
		['ano' => true, 'type' =>"ano", 'name' =>"Cutting Words", 'text' => "When a creature that you can see within 60 feet of you makes an attack roll, an ability check, or a damage roll, you can use your reaction to expend on of your uses of Bardic Inspiration, rolling a Bardic Inspiration die and subtracting the number rolled from the creature&rsquo;s roll. You can choose to use this feature after the creature makes the roll, but before the DM determines whether the attack roll or ability check succeeds or fails, or before the creature deals its damage. The creature is immune if it cannot hear you or if it&rsquo;s immune to being charmed."]
		]]
	]],
	'atks' => ['attributes' => [
		['wep' => true, 'type' =>"wep", 'name' => "Steel Rapier", 'type' => "Martial Melee Weapon Attack", 'text' => "reach 5ft., <i>finesse</i>, one target, +5 to hit. Hit: 1d8+3 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Dagger", 'type' => "Simple Melee Weapon Attack", 'text' => "reach 5ft, <i>Finesse</i>, one target, +4 to hit. Hit: 1d4+2 slashing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Enhanced Hand Crossbow", 'type' => "Simple Ranged Weapon Attack", 'text' => "range 30/120 ft, <i>Finesse</i>, one target, +5 to hit. Hit: 1d6+3 slashing damage."]
	]],
	'spellist' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Spell save DC", 'text' => "18"],
		['ano' => true, 'type' =>"ano", 'name' =>"Spell attack modifier", 'text' => "+10"]
	], 'levels' => [
		['cantrip' => true, 'spells' => [
		['name' => "Message", 'sname' => "message"],
		['name' => "Vicious Mockery", 'sname' => "viciousmockery"]
		]],
		['cantrip' => false, 'level' => 1, 'slots' => 4, 'spells' => [
		['name' => "Disguise Self", 'prepped' => true, 'sname' => "disguiseself"],
		['name' => "Healing Word", 'prepped' => true, 'sname' => "healingword"],
		['name' => "Sleep", 'prepped' => true, 'sname' => "sleep"],
		['name' => "Thunderwave", 'prepped' => true, 'sname' => "thunderwave"]
		]],
		['cantrip' => false, 'level' => 2, 'slots' => 2, 'spells' => [
		['name' => "Heat Metal", 'prepped' => true, 'sname' => "heatmetal"],
		['name' => "Invisibility", 'prepped' => true, 'sname' => "invisibility"]
		]]
	]]
]; ?>