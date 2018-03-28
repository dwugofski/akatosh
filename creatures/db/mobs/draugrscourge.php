
<?php $draugrscourge_mob = [
	'name' => "Draugr Scourge",
	'size' => "Medium",
	'type' => "undead",
	'alignment' => "Neutral Evil",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Armor Class", 'text' => "15 (leather armor, shield)"],
		['ano' => true, 'type' => "ano", 'name' => "Hit Points", 'text' => "45 (6d8 + 18)"],
		['ano' => true, 'type' => "ano", 'name' => "Speed", 'text' => "30ft"]
	]],
	'STR' => "16 (+3)",
	'DEX' => "10 (+0)",
	'CON' => "16 (+3)",
	'INT' => "4 (-3)",
	'WIS' => "6 (-2)",
	'CHA' => "5 (-3)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Skills", 'text' => "Intimidation +2"],
		['ano' => true, 'type' => "ano", 'name' => "Saving Throws", 'text' => "Wis +0"],
		['ano' => true, 'type' => "ano", 'name' => "Damage Immunities", 'text' => "poison"],
		['ano' => true, 'type' => "ano", 'name' => "Condition Immunities", 'text' => "poisoned"],
		['ano' => true, 'type' => "ano", 'name' => "Senses", 'text' => "passive Perception 11"],
		['ano' => true, 'type' => "ano", 'name' => "Languages", 'text' => "Understands all languages it knew in life but cannot speak"],
		['ano' => true, 'type' => "ano", 'name' => "Challenge", 'text' => "2 (450 XP)"]
	]],
	'feats' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Dark Devotion.", 'text' => "The scourge has advantage on saving throws against being charmed or frightened"],
		['ano' => true, 'type' => "ano", 'name' => "Spellcasting.", 'text' => "The scourge is a 4th-level spellcaster. Its spellcasting ability is Wisdom (spell save DC 11, +3 to hit with spell attacks). The scourge has the following cleric spells prepared:"],
		['par' => true, 'type' => "par", 'text' => "Cantrips (at will): <i>light</i>, <i>sacred flame</i>, <i>thaumaturgy</i><br/>1st level (4 slots): <i>command</i>, <i>inflict wounds</i>, <i>shield of faith</i><br/>2nd level (3 slots): <i>hold person</i>, <i>spiritual weapon</i>"]
	]],
	'actions' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Multiattack.", 'text' => "The scourge makes two melee attacks"],
		['ano' => true, 'type' => "ano", 'name' => "Axe.", 'text' => "<i>Melee Weapon Attack</i>: +4 to hit, reach 5 ft., one creature. Hit: <b class=\"die dmg slash\">8 (2d6 + 2)</b> slashing damage."],
	]]
]; ?>