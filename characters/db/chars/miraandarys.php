<?php $miraandarys_character = [
	'name' => "Mira Andarys", 
	'race' => "Dunmer",
	'clss' => [
		['name' => "Rogue", 'level' => "4"]
	],
	'level' => 3,
	'alignment' => "Lawful Evil",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Armor Class", 'text' => "13 (light armor)"],
		['ano' => true, 'type' =>"ano", 'name' => "Hit Points", 'text' => "21 (3d8 + 12)"],
		['ano' => true, 'type' =>"ano", 'name' => "Speed", 'text' => "40ft"]
	]],
	'STR' => "15 (+2)",
	'DEX' => "14 (+2)",
	'CON' => "11 (+1)",
	'INT' => "10 (0)",
	'WIS' => "12 (+1)",
	'CHA' => "8 (-1)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Saving Throw Proficiencies", 'text' => "Dexterity, Intelligence"],
		['ano' => true, 'type' =>"ano", 'name' => "Skill Proficiencies", 'text' => "Acrobatics, Athletics, Inisght, Perception"],
		['ano' => true, 'type' =>"ano", 'name' => "Equipment Proficiencies", 'text' => "Light armor, simple weapons, hand crossbows, longswords, rapiers, shortswords, thieve&rsquo;s tools"],
		['ano' => true, 'type' =>"ano", 'name' => "Languages", 'text' => "Cyrodiilic, Dunmeris"]
	]],
	'skills' => ['group' => [
		['skill' => [
		['name' => "Acrobatics", 'ability' => "DEX", 'mod' => "+6"],
		['name' => "Animal Handling", 'ability' => "WIS", 'mod' => "+1"],
		['name' => "Arcana", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Athletics", 'ability' => "STR", 'mod' => "+8"],
		['name' => "Deception", 'ability' => "CHA", 'mod' => "-1"],
		['name' => "History", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Insight", 'ability' => "WIS", 'mod' => "+3"],
		['name' => "Intimidation", 'ability' => "CHA", 'mod' => "-1"],
		['name' => "Investigation", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Medicine", 'ability' => "WIS", 'mod' => "+1"],
		['name' => "Nature", 'ability' => "INT", 'mod' => "0"],
		['name' => "Perception", 'ability' => "WIS", 'mod' => "+3"]
		]],
		['skill' => [
		['name' => "Performance", 'ability' => "CHA", 'mod' => "-1"],
		['name' => "Persuasion", 'ability' => "CHA", 'mod' => "-1"],
		['name' => "Religion", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Sleight of Hand", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Stealth", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Survival", 'ability' => "WIS", 'mod' => "+1"]
		]]
	]],
	'features' => ['feat_sects' => [
		['section' => "Racial Features: Dunmer", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Resist Fire", 'text' => "Dunmer have resistance to fire attacks, halving all fire damage taken."],
		['ano' => true, 'type' =>"ano", 'name' =>"Ancestor Guardians", 'text' => "Once per long rest, Dunmer can summon their ancestor spirits to protect them against harm. For six rounds after using this ability, creatures attacking the caster have disadvantage on attack rolls."]
		]],
		['section' => "Background Features: Morag Tong ", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Connections", 'text' => "I have access to a network of contacts within every major city in Tamriel to provide assistance and information into the criminal underworld of the city."]
		]],
		['section' => "Class Features: Rogue", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Expertise", 'text' => "Double 2 proficiencies bonuses: Acrobatics &amp; Athletics."],
		['ano' => true, 'type' =>"ano", 'name' =>"Sneak Attack", 'text' => "Once per turn, you can deal an extra <b class=\"die dmg slash\">2d6</b> damage with a finesse or ranged weapon."],
		['ano' => true, 'type' =>"ano", 'name' =>"Cunning Action", 'text' => "You can take a bonus action on each of your turns in combat. This action can be used only to take the Dash, Disengage, or Hide action."]
		]],
		['section' => "Class Features: Rogue Assassin Archetype", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Bonus Proficiencies", 'text' => "When you choose this archetype at 3rd level, you gain proficiency with the disguise kit and the poisoner&rsquo;s kit."],
		['ano' => true, 'type' =>"ano", 'name' =>"Assassinate", 'text' => "Starting at 3rd level, you are at your deadliest when you get the drop on your enemies. You have advantage on attack rolls against any creature that hasn&rsquo;t taken a turn in the combat yet. In addition, any hit you score against a creature that is surprised is a critical hit."]
		]]
	]],
	'atks' => ['attributes' => [
		['wep' => true, 'type' =>"wep", 'name' => "Imperial Bow", 'type' => "Simple Ranged Weapon Attack", 'text' => "range 80/320, one target +5 to hit. Hit: 1d6+3 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Steel Dagger", 'type' => "Melee Weapon Attack", 'text' => "reach 5 ft, <i>Finesse</i>, one target +5 to hit. Hit: 1d4+3 piercing damage."]
	]]
]; ?>