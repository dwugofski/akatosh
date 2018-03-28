<?php $karaggroelimack_character = [
	'name' => "Karag Gro-Elimack", 
	'race' => "Orsimer",
	'clss' => [
		['name' => "Barbarian", 'level' => "5"]
	],
	'level' => 4,
	'alignment' => "Neutral Good",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Armor Class", 'text' => "15 (unarmored)"],
		['ano' => true, 'type' =>"ano", 'name' => "Hit Points", 'text' => "63 (4d12 + 35)"],
		['ano' => true, 'type' =>"ano", 'name' => "Speed", 'text' => "40ft"],
		['ano' => true, 'type' =>"ano", 'name' => "Number of Rages", 'text' => "6"],
		['ano' => true, 'type' =>"ano", 'name' => "Rage Damage", 'text' => "+2"]
	]],
	'STR' => "20 (+5)",
	'DEX' => "14 (+2)",
	'CON' => "16 (+3)",
	'INT' => "12 (+1)",
	'WIS' => "10 (+0)",
	'CHA' => "12 (+1)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Saving Throw Proficiencies", 'text' => "Strength (+8), Constitution (+6)"],
		['ano' => true, 'type' =>"ano", 'name' => "Skill Proficiencies", 'text' => "Athletics, Intimidation, Perception, Survival"],
		['ano' => true, 'type' =>"ano", 'name' => "Equipment Proficiencies", 'text' => "Simple weapons, martial weapons, light armor, medium armor, shields, all axes, harps"],
		['ano' => true, 'type' =>"ano", 'name' => "Languages", 'text' => "Cyrodiilic"]
	]],
	'skills' => ['group' => [
		['skill' => [
		['name' => "Acrobatics", 'ability' => "DEX", 'mod' => "+3"],
		['name' => "Animal Handling", 'ability' => "WIS", 'mod' => "+0"],
		['name' => "Arcana", 'ability' => "INT", 'mod' => "+1"]
		]],
		['skill' => [
		['name' => "Athletics", 'ability' => "STR", 'mod' => "+9"],
		['name' => "Deception", 'ability' => "CHA", 'mod' => "+1"],
		['name' => "History", 'ability' => "INT", 'mod' => "+1"]
		]],
		['skill' => [
		['name' => "Insight", 'ability' => "WIS", 'mod' => "+0"],
		['name' => "Intimidation", 'ability' => "CHA", 'mod' => "+5"],
		['name' => "Investigation", 'ability' => "INT", 'mod' => "+1"]
		]],
		['skill' => [
		['name' => "Medicine", 'ability' => "WIS", 'mod' => "+0"],
		['name' => "Nature", 'ability' => "INT", 'mod' => "+1"],
		['name' => "Perception", 'ability' => "WIS", 'mod' => "+3"]
		]],
		['skill' => [
		['name' => "Performance", 'ability' => "CHA", 'mod' => "+1"],
		['name' => "Persuasion", 'ability' => "CHA", 'mod' => "+1"],
		['name' => "Religion", 'ability' => "INT", 'mod' => "+1"]
		]],
		['skill' => [
		['name' => "Sleight of Hand", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Stealth", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Survival", 'ability' => "WIS", 'mod' => "+3"]
		]]
	]],
	'features' => ['feat_sects' => [
		['section' => "Racial Features: Orc", 'attributes' => [
			['ano' => true, 'type' =>"ano", 'name' => 'Shield Proficiency', 'text' => 'When wearing a shield, Orsimer add their proficiency bonus to their AC in addition to the +2 shield bonus'],
			['ano' => true, 'type' =>"ano", 'name' => 'Light and Medium Armor Proficiency', 'text' => 'Orsimer gain their proficiency bonus to their AC when wearing Medium armor'],
			['ano' => true, 'type' =>"ano", 'name' => 'Resist Magicka', 'text' => 'Damaging spells against Orsimer suffer a -1 penalty to damage per level'],
			['ano' => true, 'type' =>"ano", 'name' => 'Berserker Rage', 'text' => 'Barbarian Orsimer can rage an additional number of times per long rest equal to his or her CON mod. Non-Barbarian Orsimer gain access to the rage feature of a level 1 Barbarian, but can only rage once per long rest']
		]],
		['section' => "Class Features: Barbarian", 'attributes' => [
			['ano' => true, 'type' =>"ano", 'name' => "Rage", 'text' => "In battle, you fight with primal ferocity. On your turn, you can enter a rage as a bonus action."],
			['par' => true, 'type' => 'par', 'text' => "While raging, you gain the following benefits if you aren&rsquo;t wearing heavy armor:<br\>
				You have advantage on STR checks and saving throws.<br/>
				When you make a melee weapon attack using STR, you gain a +2 bonus to the damage roll. This bonus increases as you level.<br/>
				You have Resistance to bludgeoning, piercing, and slashing damage."],
			['par' => true, 'type' => 'par', 'text' => "If you are able to cast spells, you can&rsquo;t cast them or concentrate on them while raging."],
			['par' => true, 'type' => 'par', 'text' => "Your rage lasts for 1 minute. It ends early if you are knocked unconscious or if your turn ends and you haven&rsquo;t attacked a hostile creature since your last turn or taken damage since then. You can also end your rage on your turn as a bonus action."],
			['par' => true, 'type' => 'par', 'text' => "Once you have raged the maximum number of times for your barbarian level, you must finish a long rest before you can rage again. You may rage 2 times at 1st level, 3 at 3rd, 4 at 6th, 5 at 12th, and 6 at 17th."],
			['ano' => true, 'type' =>"ano", 'name' => "Unarmored Defense", 'text' => "While you are not wearing any armor, your AC equals 10 + your DEC modifier + your CON modifier. You can use a shield and still gain this benefit."],
			['ano' => true, 'type' =>"ano", 'name' => "Danger Sense", 'text' => "At 2nd level, you gain an uncanny sense of when things nearby aren&rsquo;t as they should be, giving you an edge when you dodge away from danger. You have advantage on DEX saving throws against effects that you can see, such as traps and spells. To gain this benefit, you can't be blinded, deafened, or incapacitated."],
			['ano' => true, 'type' =>"ano", 'name' => "Reckless Attack", 'text' => "Starting at 2nd level, you can throw aside all concern for defense to attack with fierce desperation. When you make your first attack on your turn, you can decide to attack recklessly. Doing so gives you advantage on melee weapon attack rolls using STR during this turn, but attack rolls against you have advantage until your next turn."],
			['ano' => true, 'type' =>"ano", 'name' => "Extra Attack", 'text' => "You can attack twice instead of once, whenever you take the Attack action on your turn."],
			['ano' => true, 'type' =>"ano", 'name' => "Fast Movement", 'text' => "Your speed increases by 10 feet while you aren&rsquo;t wearing heavy armor."]
		]],
		['section' => "Class Features: Path of the Berserker", 'attributes' => [
			['ano' => true, 'type' =>"ano", 'name' =>"Frenzy", 'text' => "Starting when you choose this path at 3rd level, you can go into a frenzy when you rage. If you do so, for the duration of your rage you can make a single melee weapon attack as a Bonus Action on each of your turns after this one. When your rage ends, you suffer one level of exhaustion."]
		]],
		['section' => "Background: Outlander", 'attributes' => [
			['ano' => true, 'type' =>"ano", 'name' =>"Wanderer", 'text' => "You have an excellent memory for maps and geography, and you can always recall the general layout of terrain, settlements, and other features around you. In addition, you can find food and fresh water for yourself and up to five other people each day, provided that the land offers berries, small game, water, and so forth."]
		]],
		['section' => "Bonus Features", 'attributes' => [
			['ano' => true, 'type' =>"ano", 'name' =>"Tough", 'text' => "Your hit point maximum increases by an amount equal to twice your level when you gain this feat. Whenever you gain a level thereafter, your hit point maximum increases by an additional 2 hit points."]
		]]
	]],
	'atks' => ['attributes' => [
		['wep' => true, 'type' =>"wep", 'name' => "Tailor&rsquo;s Greataxe (Dwarven)", 'type' => "Martial Melee Weapon Attack", 'text' => "reach 5ft., <i>heavy, two-handed</i>, one target, +9 to hit. Hit: 1d12+7 piercing damage."]
	]]
]; ?>