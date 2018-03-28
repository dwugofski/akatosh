<?php $zala_character = [
	'name' => "Zala", 
	'race' => "Redguard",
	'clss' => [
		['name' => "Fighter", 'level' => "5"]
	],
	'level' => 3,
	'alignment' => "Neutral",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Armor Class", 'text' => "19 (steel armor, steel shield)"],
		['ano' => true, 'type' =>"ano", 'name' => "Hit Points", 'text' => "40 (3d10 + 22)"],
		['ano' => true, 'type' =>"ano", 'name' => "Speed", 'text' => "30ft"]
	]],
	'STR' => "16 (+3)",
	'DEX' => "12 (+1)",
	'CON' => "16 (+3)",
	'INT' => "10 (+0)",
	'WIS' => "8 (-1)",
	'CHA' => "10 (+0)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Saving Throw Proficiencies", 'text' => "Strength, Constitution"],
		['ano' => true, 'type' =>"ano", 'name' => "Skill Proficiencies", 'text' => "Athletics, Indimidation"],
		['ano' => true, 'type' =>"ano", 'name' => "Equipment Proficiencies", 'text' => "All weapon types, all armor, shields "],
		['ano' => true, 'type' =>"ano", 'name' => "Languages", 'text' => "Cyrodiilic"]
	]],
	'skills' => ['group' => [
		['skill' => [
		['name' => "Acrobatics", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Animal Handling", 'ability' => "WIS", 'mod' => "-1"],
		['name' => "Arcana", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Athletics", 'ability' => "STR", 'mod' => "+6"],
		['name' => "Deception", 'ability' => "CHA", 'mod' => "0"],
		['name' => "History", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Insight", 'ability' => "WIS", 'mod' => "-1"],
		['name' => "Intimidation", 'ability' => "CHA", 'mod' => "+3"],
		['name' => "Investigation", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Medicine", 'ability' => "WIS", 'mod' => "-1"],
		['name' => "Nature", 'ability' => "INT", 'mod' => "0"],
		['name' => "Perception", 'ability' => "WIS", 'mod' => "-1"]
		]],
		['skill' => [
		['name' => "Performance", 'ability' => "CHA", 'mod' => "0"],
		['name' => "Persuasion", 'ability' => "CHA", 'mod' => "0"],
		['name' => "Religion", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Sleight of Hand", 'ability' => "DEX", 'mod' => "+1"],
		['name' => "Stealth", 'ability' => "DEX", 'mod' => "+1"],
		['name' => "Survival", 'ability' => "WIS", 'mod' => "0"]
		]]
	]],
	'features' => ['feat_sects' => [
		['section' => "Racial Features: Redguard", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Light Armor Proficiency", 'text' => "Redguards gain their proficiency bonus to their AC when wearing light armor"],
		['ano' => true, 'type' =>"ano", 'name' =>"Medium Armor Proficiency", 'text' => "Redguards gain their proficiency bonus to their AC when wearing medium armor"],
		['ano' => true, 'type' =>"ano", 'name' =>"Poison Resistance", 'text' => "Redguards have a +3 bonus on saving throws against the effects of poison"],
		['ano' => true, 'type' =>"ano", 'name' =>"Resist Common Disease", 'text' => "Redguards have a +3 bonus on saving throws against the effects of diseases"],
		['ano' => true, 'type' =>"ano", 'name' =>"Adrenaline Rush", 'text' => "Once per long rest Redguards can cast <i class=\"bred\">Adrenaline Rush</i>, giving them the following effects for one hour:<br/>+1 to DEX mod<br/>+1 to CON mod<br/>+1 to STR mod<br/>+10 speed<br/>+1d12 temp HP"]
		]],
		['section' => "Class Features: Fighter", 'attributes' => [
			['ano' => true, 'type' =>"ano", 'name' => "Fighting Style: Protection", 'text' => "When a creature you can see attacks a target other you that is within 5 feet of you, you can use your reaction to impose a disadvantage on the attack roll. You must be wielding a shield."],
			['ano' => true, 'type' =>"ano", 'name' => "Second Wind", 'text' => "You have a limited well of stamina that you can draw on to protect yourself from harm. On your turn, you can use a bonus action to regain hitpoints equal to 1d10 + your fighter level. Once you use this feature, you must finish a short or long rest before you can use it again."],
			['ano' => true, 'type' =>"ano", 'name' => "Action Surge", 'text' => "Starting at 2nd level, you can push yourself beyond your normal limits for a moment. On your turn, you can take one additional action on top of your regular action and a possible bonus action."],
			['par' =>true, 'type' =>"par", 'text' => "Once you use this feature, you must finish a short or long rest before you can use it again. Starting at 17th level, you can use it twice before a rest, but only once on the same turn."],
			['ano' => true, 'type' =>"ano", 'name' => "Extra Attack", 'text' => "You can attack twice instead of once, whenever you take the Attack action on your turn."]
		]],
		['section' => "Class Features: Fighter Battle Master Archetype", 'attributes' => [
			['ano' => true, 'type' =>"ano", 'name' =>"Superiority Dice", 'text' => "4d8"],
			['ano' => true, 'type' =>"ano", 'name' =>"Maneuver DC", 'text' => "8 + prof. bonus + STR mod = 13"],
			['ano' => true, 'type' =>"ano", 'name' =>"Maneuver: Commander&rsquo;s Strike", 'text' => "When you take the Attack action on your turn, you can forgo one of your attacks and use a bonus action to direct one of your companions to strike. When you do so, choose a friendly creature who can see or hear you and expend one superiority die. That creature can immediately use its reaction to make one weapon attack, adding the superiority die to the attack&rsquo;s damage roll."],
			['ano' => true, 'type' =>"ano", 'name' =>"Maneuver: Riposte", 'text' => "When a creature misses you with a melee attack, you can use your reaction and expend one superiority die to make a melee weapon attack against the creature. If you hit, you add the superiority die to the attack&rsquo;s damage roll."],
			['ano' => true, 'type' =>"ano", 'name' =>"Maneuver: Trip Attack", 'text' => "When you hit a creature with a weapon attack, you can expend one superiority die to attempt to knock the target down. You add the superiority die to the attack&rsquo;s damage roll, and if the target is Large or smaller, it must make a Strength saving throw. On a failed save, you knock the target prone."]
		]],
		['section' => "Bonus Features", 'attributes' => [
			['ano' => true, 'type' =>"ano", 'name' =>"Savage Attack", 'text' => "Once per turn when you roll damage for a melee weapon attack, you can reroll the weapon&rsquo;s damage dice and use either total."]
		]]
	]],
	'atks' => ['attributes' => [
		['wep' => true, 'type' =>"wep", 'name' => "Steel Longsword", 'type' => "Martial Melee Weapon Attack", 'text' => "reach 5ft, <i>Versatile</i> (1d8), one target +6 to hit. Hit: 1d8 + 4 slashing damage."]
	]]
]; ?>