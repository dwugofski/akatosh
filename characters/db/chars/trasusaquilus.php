<?php $trasusaquilus_character = [
	'name' => "Trasus Aquilus", 
	'race' => "Imperial",
	'clss' => [
		['name' => "Cleric", 'level' => "3"]
	],
	'level' => 3,
	'alignment' => "Lawful Neutral",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Armor Class", 'text' => "15 (heavy armor)"],
		['ano' => true, 'type' =>"ano", 'name' => "Hit Points", 'text' => "18 (2d10 + 7)"],
		['ano' => true, 'type' =>"ano", 'name' => "Speed", 'text' => "30ft"]
	]],
	'STR' => "14 (+2)",
	'DEX' => "9 (-1)",
	'CON' => "9 (-1)",
	'INT' => "11 (0)",
	'WIS' => "17 (+3)",
	'CHA' => "14 (+2)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Saving Throw Proficiencies", 'text' => "Wisdom, Charisma"],
		['ano' => true, 'type' =>"ano", 'name' => "Skill Proficiencies", 'text' => "Athletics, Deception, Intimidation, Medicine, Persuasion, Religion"],
		['ano' => true, 'type' =>"ano", 'name' => "Equipment Proficiencies", 'text' => "Martial weapons, heavy armor"],
		['ano' => true, 'type' =>"ano", 'name' => "Languages", 'text' => "Cyrodiilic"]
	]],
	'skills' => ['group' => [
		['skill' => [
		['name' => "Acrobatics", 'ability' => "DEX", 'mod' => "-1"],
		['name' => "Animal Handling", 'ability' => "WIS", 'mod' => "+3"],
		['name' => "Arcana", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Athletics", 'ability' => "STR", 'mod' => "+4"],
		['name' => "Deception", 'ability' => "CHA", 'mod' => "+5"],
		['name' => "History", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Insight", 'ability' => "WIS", 'mod' => "+3"],
		['name' => "Intimidation", 'ability' => "CHA", 'mod' => "+4"],
		['name' => "Investigation", 'ability' => "INT", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Medicine", 'ability' => "WIS", 'mod' => "+5"],
		['name' => "Nature", 'ability' => "INT", 'mod' => "0"],
		['name' => "Perception", 'ability' => "WIS", 'mod' => "+3"]
		]],
		['skill' => [
		['name' => "Performance", 'ability' => "CHA", 'mod' => "+2"],
		['name' => "Persuasion", 'ability' => "CHA", 'mod' => "+6"],
		['name' => "Religion", 'ability' => "INT", 'mod' => "+3"]
		]],
		['skill' => [
		['name' => "Sleight of Hand", 'ability' => "DEX", 'mod' => "-1"],
		['name' => "Stealth", 'ability' => "DEX", 'mod' => "-1"],
		['name' => "Survival", 'ability' => "WIS", 'mod' => "+3"]
		]]
	]],
	'features' => ['feat_sects' => [
		['section' => "Racial Features: Imperial", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Star of the West", 'text' => "Once per long rest, Imperials can reduce a creature's STR mod by 1 and increase their STR mod by 1."],
		['ano' => true, 'type' =>"ano", 'name' =>"Voice of the Emperor", 'text' => "Once per long rest, Imperials can charm a target for 15 seconds, gaining advantage on all skill rolls involving the CHA ability."]
		]],
		['section' => "Class Features: Cleric", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => "Channel Divinity: Turn Undead", 'text' => "As an action, you present your holy symbol and speak a prayer censuring the undead. Each undead that can see or hear you within 30 feet of you must make a <b class=\"die save wis\">WIS</b> saving throw. If the creature fails for 1 minute or until it takes any damage. A turned creature must spend its turn trying to move as far away from you as it can, and it can&rsquo;t willingly move to a space within 30 feet of you. It also can&rsquo;t take reactions. For its action, it can only use the Dash action or try to escape from an effect that prevents it from moving. If there&rsquo;s nowhere to move, the creature can use the Dodge action."]
		]],
		['section' => "Class Features: Cleric Light Domain", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Bonus Cantrip", 'text' => "You gain access to the <i>Light</i> cantrip, if you don&lsquo;t already know it."],
		['ano' => true, 'type' =>"ano", 'name' =>"Warding Flare", 'text' => "When you are attacked by a hostile creature within 30 feet of you that you can see, you can use your reaction to impose disadvantage on the attack roll, causing light to flare in front of the attacker before it hits or misses. An attacker that cannot be blinded is immune to this feature. This feat can be used a number of times equal to your WIS modifier (a minimum of once) per long rest."],
		['ano' => true, 'type' =>"ano", 'name' =>"Channel Divinity: Radiance of the Dawn", 'text' => "As an action, you present your holy symbol, and any magical darkness within 30 feet of you is dispelled. Additionally, each hostile creature within 30 feet of you must make a <b class=\"die save con\">CON</b> saving throw. A creature takes radiant damage equal to 2d10 + your cleric level on a failed saving throw, and half as much damage on a successful one. A creature that has total cover from you is not affected."],
		['ano' => true, 'type' =>"ano", 'name' =>"Available Domain Spells:", 'text' => "You know the <i>Burning Hands</i>, <i>Faerie Fire</i>, <i>Flaming Sphere</i>, and <i>Scorching Ray</i> spells. They are always prepared and they do not count to the number of spells you can prepare in a day."]
		]],
		['section' => "Class Features: Cleric War Domain", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Bonus Proficiencies", 'text' => "You gain proficiency with martial weapons and heavy armor."],
		['ano' => true, 'type' =>"ano", 'name' =>"War Priest", 'text' => "When you attack, you can make one weapon attack as a bonus action. This feat can be used a number of times equal to your WIS modifier (a minimum of once) per long rest."],
		['ano' => true, 'type' =>"ano", 'name' =>"Channel Divinity: Guided Strike", 'text' => "When you make an attack roll, you can gain a +10 bonus to the roll. You make this choice after you see the roll, but before the DM tells you whether the attack hits or misses."],
		['ano' => true, 'type' =>"ano", 'name' =>"Available Domain Spells:", 'text' => "You know the <i>Divine Favor</i>, <i>Shield of Faith</i>, <i>Magic Weapon</i>, and <i>Spiritual Weapon</i> spells. They are always prepared and they do not count to the number of spells you can prepare in a day."]
		]]
	]],
	'atks' => ['attributes' => [
		['wep' => true, 'type' =>"wep", 'name' => "Crossbow", 'type' => "Simple Ranged Weapon Attack", 'text' => "range 80/320, one target. Hit: 1d8 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Claws", 'type' => "Melee Weapon Attack", 'text' => "reach 5ft, <i>Finesse</i>, one target. Hit: 1d6 slashing damage."]
	]],
	'spellist' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Spell save DC", 'text' => "13"],
		['ano' => true, 'type' =>"ano", 'name' =>"Spell attack modifier", 'text' => "+5"]
	], 'levels' => [
		['cantrip' => true, 'spells' => [
		['name' => "Light", 'sname' => "light"],
		['name' => "Mending", 'sname' => "mending"],
		['name' => "Sacred Flame", 'sname' => "sacredflame"],
		['name' => "Spare the Dying", 'sname' => "sparethedying"]
		]],
		['cantrip' => false, 'level' => 1, 'slots' => 4, 'spells' => [
		['name' => "Bane", 'prepped' => false, 'sname' => "bane"],
		['name' => "Bless", 'prepped' => false, 'sname' => "bless"],
		['name' => "Burning Hands", 'prepped' => true, 'sname' => "burninghands"],
		['name' => "Command", 'prepped' => false, 'sname' => "command"],
		['name' => "Create or Destroy Water", 'prepped' => false, 'sname' => "createordestroywater"],
		['name' => "Cure Wounds", 'prepped' => true, 'sname' => "curewounds"],
		['name' => "Detect Evil and Good", 'prepped' => false, 'sname' => "detectevilandgood"],
		['name' => "Detect Magic", 'prepped' => true, 'sname' => "detectmagic"],
		['name' => "Detect Poison and Disease", 'prepped' => true, 'sname' => "detectpoisonanddisease"],
		['name' => "Divine Favor", 'prepped' => true, 'sname' => "divinefavor"],
		['name' => "Faerie Fire", 'prepped' => true, 'sname' => "faeriefire"],
		['name' => "Guiding Bolt", 'prepped' => true, 'sname' => "guidingbolt"],
		['name' => "Healing Word", 'prepped' => false, 'sname' => "healingword"],
		['name' => "Inflict Wounds", 'prepped' => false, 'sname' => "inflictwounds"],
		['name' => "Purify Food and Drink", 'prepped' => true, 'sname' => "purifyfoodanddrink"],
		['name' => "Sanctuary", 'prepped' => true, 'sname' => "sanctuary"],
		['name' => "Shield of Faith", 'prepped' => true, 'sname' => "shieldoffaith"]
		]],
		['cantrip' => false, 'level' => 2, 'slots' => 2, 'spells' => [
		['name' => "Aid", 'prepped' => false, 'sname' => "aid"],
		['name' => "Augury", 'prepped' => true, 'sname' => "augury"],
		['name' => "Blindness/Deafness", 'prepped' => false, 'sname' => "blindnessdeafness"],
		['name' => "Calm Emotions", 'prepped' => false, 'sname' => "calmemotions"],
		['name' => "Continual Flame", 'prepped' => false, 'sname' => "continualflame"],
		['name' => "Enhance Ability", 'prepped' => false, 'sname' => "enhanceability"],
		['name' => "Find Traps", 'prepped' => false, 'sname' => "findtraps"],
		['name' => "Flaming Sphere", 'prepped' => true, 'sname' => "flamingsphere"],
		['name' => "Gentle Repose", 'prepped' => true, 'sname' => "gentlerepose"],
		['name' => "Hold Person", 'prepped' => false, 'sname' => "holdperson"],
		['name' => "Lesser Restoration", 'prepped' => false, 'sname' => "lesserrestoration"],
		['name' => "Locate Object", 'prepped' => false, 'sname' => "locateobject"],
		['name' => "Magic Weapon", 'prepped' => false, 'sname' => "magicweapon"],
		['name' => "Prayer of Healing", 'prepped' => true, 'sname' => "prayerofhealing"],
		['name' => "Protection from Poison", 'prepped' => false, 'sname' => "protectionfrompoison"],
		['name' => "Scorching Ray", 'prepped' => true, 'sname' => "scorchingray"],
		['name' => "Silence", 'prepped' => true, 'sname' => "silence"],
		['name' => "Spiritual Weapon", 'prepped' => true, 'sname' => "spiritualweapon"],
		['name' => "Warding Bond", 'prepped' => false, 'sname' => "wardingbond"],
		['name' => "Zone of Truth", 'prepped' => false, 'sname' => "zoneoftruth"],
		]]
	]]
]; ?>