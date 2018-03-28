
<?php $dragoncultthug_mob = [
	'name' => "Dragon Cult Thug",
	'size' => "Medium",
	'type' => "humanoid",
	'alignment' => "Lawful Evil",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Armor Class", 'text' => "11 (leather armor)"],
		['ano' => true, 'type' => "ano", 'name' => "Hit Points", 'text' => "32 (5d8 + 10)"],
		['ano' => true, 'type' => "ano", 'name' => "Speed", 'text' => "30ft"]
	]],
	'STR' => "15 (+2)",
	'DEX' => "11 (+0)",
	'CON' => "14 (+2)",
	'INT' => "10 (+0)",
	'WIS' => "10 (+0)",
	'CHA' => "11 (+0)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Skills", 'text' => "Intimidation +2"],
		['ano' => true, 'type' => "ano", 'name' => "Senses", 'text' => "passive Perception 10"],
		['ano' => true, 'type' => "ano", 'name' => "Languages", 'text' => "any one language (usually Cyrodiilic)"],
		['ano' => true, 'type' => "ano", 'name' => "Challenge", 'text' => "1/2 (100 XP)"]
	]],
	'feats' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Pack Tactics", 'text' => "The thug has advantage on an attack roll against a creature if at least one of the thug's allies is within 5 feet of the creature and the ally isn&rsquo;t incapacitated."]
	]],
	'actions' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Multiattack.", 'text' => "The thug makes two melee attacks"],
		['ano' => true, 'type' => "ano", 'name' => "Mace.", 'text' => "<i>Melee Weapon Attack</i>: +4 to hit, reach 5 ft., one creature. Hit: <b class=\"die dmg bludge\">5 (1d6 + 2)</b> bludgeoning damage."],
		['ano' => true, 'type' => "ano", 'name' => "Heavy Crossbow.", 'text' => "<i>Ranged Weapon Attack</i>: +2 to hit, range 100/400 ft., one target. Hit: <b class=\"die dmg pierce\">5 (1d10)</b> piercing damage."]
	]]
]; ?>