<?php $kelei_character = [
	'name' => "Kel-Ei", 
	'race' => "Argonian",
	'clss' => [
		['name' => "Wizard", 'level' => "4"]
	],
	'level' => 3,
	'alignment' => "Neutral",
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
		['ano' => true, 'type' =>"ano", 'name' => "Languages", 'text' => "Cyrodiilic, Jel, Ayleidoon, Atmoran"]
	]],
	'skills' => ['group' => [
		['skill' => [
		['name' => "Acrobatics", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Animal Handling", 'ability' => "WIS", 'mod' => "0"],
		['name' => "Arcana", 'ability' => "INT", 'mod' => "+6"]
		]],
		['skill' => [
		['name' => "Athletics", 'ability' => "STR", 'mod' => "+2"],
		['name' => "Deception", 'ability' => "CHA", 'mod' => "0"],
		['name' => "History", 'ability' => "INT", 'mod' => "+6"]
		]],
		['skill' => [
		['name' => "Insight", 'ability' => "WIS", 'mod' => "+2"],
		['name' => "Intimidation", 'ability' => "CHA", 'mod' => "0"],
		['name' => "Investigation", 'ability' => "INT", 'mod' => "+6"]
		]],
		['skill' => [
		['name' => "Medicine", 'ability' => "WIS", 'mod' => "+1"],
		['name' => "Nature", 'ability' => "INT", 'mod' => "+5"],
		['name' => "Perception", 'ability' => "WIS", 'mod' => "0"]
		]],
		['skill' => [
		['name' => "Performance", 'ability' => "CHA", 'mod' => "0"],
		['name' => "Persuasion", 'ability' => "CHA", 'mod' => "0"],
		['name' => "Religion", 'ability' => "INT", 'mod' => "+4"]
		]],
		['skill' => [
		['name' => "Sleight of Hand", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Stealth", 'ability' => "DEX", 'mod' => "+2"],
		['name' => "Survival", 'ability' => "WIS", 'mod' => "0"]
		]]
	]],
	'features' => ['feat_sects' => [
		['section' => "Racial Features: Argonian", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' => 'Resist Common Disease', 'text' => 'Altmer have a +3 bonus to saving throws against diseases'],
		['ano' => true, 'type' =>"ano", 'name' => 'Scaled Skin', 'text' => 'Tough Argonian hide provides a +1 bonus to AC regardless of equipment'],
		['ano' => true, 'type' =>"ano", 'name' => 'Water Breathing', 'text' => 'Argonians can breathe underwater'],
		['ano' => true, 'type' =>"ano", 'name' => 'Resist Poison', 'text' => 'Argonians are immune to the effects of poisons'],
		['ano' => true, 'type' =>"ano", 'name' => 'Swamp Swimmers', 'text' => 'Argonians gain a +10 bonus to speed when moving through water and do not suffer movement penalties moving through swampy terrain'],
		['ano' => true, 'type' =>"ano", 'name' => 'Beast Claws', 'text' => 'Argonians can deal a 1d6 (slashing) damage unarmed']
		]],
		['section' => "Background Features: Sage ", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Researcher", 'text' => "You know where to find most recorded information."]
		]],
		['section' => "Class Features: Wizard", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Arcane Recovery", 'text' => "Once per day you can take a short rest and recover a number of spell slots up to half my wizard level."],
		['ano' => true, 'type' =>"ano", 'name' =>"Evocation Savant", 'text' => "The gold and time you must spend to copy an evocation spell into your spellbook is halved."],
		['ano' => true, 'type' =>"ano", 'name' =>"Sculpt Spells", 'text' => "You can create pockets of relative safety within the effects of your evocation spells. When you case an evocation spell that affects other creatures, you can choose up to 1 + the spell&rsquo;s level to automatically succeed saving throws against the spells and take no damage if the damage would be halved for a successful throw."]
		]],
		['section' => "Bonus Features", 'attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Elemental Adept", 'text' => "Spells which deal fire damage ignore resistances. As well, if the result of a damage dice roll for a fire damage spell is a 1, treat it as a 2."]
		]]
	]],
	'atks' => ['attributes' => [
		['wep' => true, 'type' =>"wep", 'name' => "Dagger", 'type' => "Melee Weapon Attack", 'text' => "reach 5 ft, <i>Finesse</i>, one target. Hit: 1d4 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Darts", 'type' => "Simple Ranged Weapon Attack", 'text' => "thrown 20/60, <i>Finesse</i>, one target. Hit: 1d4 piercing damage."],
		['wep' => true, 'type' =>"wep", 'name' => "Claws", 'type' => "Melee Weapon Attack", 'text' => "reach 5ft, <i>Finesse</i>, one target +4 to hit. Hit: 1d6 slashing damage."]
	]],
	'spellist' => ['attributes' => [
		['ano' => true, 'type' =>"ano", 'name' =>"Spell save DC", 'text' => "14"],
		['ano' => true, 'type' =>"ano", 'name' =>"Spell attack modifier", 'text' => "+6"]
	], 'levels' => [
		['cantrip' => true, 'spells' => [
		['name' => "Blade Ward", 'sname' => "bladeward"],
		['name' => "Acid Splash", 'sname' => "acidsplash"],
		['name' => "Mage Hand", 'sname' => "magehand"],
		['name' => "Shocking Grasp", 'sname' => "shockinggrasp"]
		]],
		['cantrip' => false, 'level' => 1, 'slots' => 4, 'spells' => [
		['name' => "Alarm", 'prepped' => false, 'sname' => "alarm"],
		['name' => "Burning Hands", 'prepped' => false, 'sname' => "burninghands"],
		['name' => "Chromatic Orb", 'prepped' => false, 'sname' => "chromaticorb"],
		['name' => "Grease", 'prepped' => false, 'sname' => "grease"],
		['name' => "Mold Earth", 'prepped' => false, 'sname' => "moldearth"],
		['name' => "Sleep", 'prepped' => false, 'sname' => "sleep"],
		['name' => "Thunderwave", 'prepped' => false, 'sname' => "thunderwave"],
		['name' => "Vicious Mockery", 'prepped' => false, 'sname' => "viciousmockery"]
		]],
		['cantrip' => false, 'level' => 2, 'slots' => 3, 'spells' => [
		['name' => "Levitate", 'prepped' => true, 'sname' => "levitate"],
		['name' => "Misty Step", 'prepped' => true, 'sname' => "mistystep"],
		['name' => "Skywrite", 'prepped' => true, 'sname' => "skywrite"],
		['name' => "Spider Climb", 'prepped' => true, 'sname' => "spiderclimb"]
		]]
	]],
	'background' => ['attributes' => [
		['par' => true, 'type' =>"par", 'text' => "Born as a Telvanni slave separated from his Saxhleel heritage, Kel-Ei was first taught magic by his master, Edraldo Telvanni, to help in his duties. During these study sessions, Kel-Ei learned about a Dwemer puzzle box Edraldo kept to study. Intrigued by the box, one day Kel-Ei asked his master about it. Since knowledge of other civilizations and cultures has no practical benefit for a slave, Edraldo told Kel-Ei to forget about the Dwemer and focus on his work."],
		['par' => true, 'type' =>"par", 'text' => "One day, while Kel-Ei working in the fields outside the wizard&rsquo;s tower, he spotted Edraldo, infuriated, charging towards him. Once again Kel-Ei had snuck into the wizard&rsquo;s library to read up on the Dwemer while his master slept, and once again &mdash; despite Edraldo threatening his life last time &mdash; Kel-Ei had mixed up the arrangement of books, and Edraldo knew he had snuck in. Furious at what he felt was an ungrateful slave, Edraldo had murder in his eyes. Fearing for his life, Kel-Ei picked up a nearby rock just in case. When Edraldo readied a fireball to send at him, Kel-Ei hurled the rock at Edraldo, striking him in the head and killing him on the spot. "],
		['par' => true, 'type' =>"par", 'text' => "Using Edraldo&rsquo;s keys, Kel-Ei freed himself and two nearby slaves. Instead of fleeing with them, Kel-Ei snuck back into the wizard&rsquo;s tower to retrieve the Dwemer puzzle box and Edraldo&rsquo;s notes. Since then Kel-Ei has been investigating the origins of the box and making his way as a traveling wizard, consulting with experts and doing odd jobs."],
		['par' => true, 'type' =>"par", 'text' => "Kel-Ei still has not learned much about the box &mdash; several other mentions of Dwemer puzzle boxes have yielded intriguing, but ultimately fruitless investigations. From what he has gathered, the first mentioning of this specific box comes from around the time of the Ayleid exodus. Further investigation revealed a story about an Ayleid refugee caravan that was ambushed outside of Labyrinthian which was rumored to carry a powerful artifact. Something about the story stood out to Kel-Ei, so he decided to investigate further. He was captured by Dragon Cultists while trying to enter the ruins a few weeks ago and is now being held as their prisoner."]
	]]
];