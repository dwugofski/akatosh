
<?php $draugr_mob = [
	'name' => "Draugr",
	'size' => "Medium",
	'type' => "undead",
	'alignment' => "Neutral Evil",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Armor Class", 'text' => "8 (unarmored)"],
		['ano' => true, 'type' => "ano", 'name' => "Hit Points", 'text' => "22 (3d8 + 9)"],
		['ano' => true, 'type' => "ano", 'name' => "Speed", 'text' => "20ft"]
	]],
	'STR' => "13 (+1)",
	'DEX' => "6 (-2)",
	'CON' => "16 (+3)",
	'INT' => "3 (-4)",
	'WIS' => "6 (-2)",
	'CHA' => "5 (-3)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Saving Throws", 'text' => "Wis +0"],
		['ano' => true, 'type' => "ano", 'name' => "Damage Resistances", 'text' => "cold"],
		['ano' => true, 'type' => "ano", 'name' => "Damage Immunities", 'text' => "poison"],
		['ano' => true, 'type' => "ano", 'name' => "Condition Immunities", 'text' => "poisoned"],
		['ano' => true, 'type' => "ano", 'name' => "Senses", 'text' => "Darkvision 60ft., passive Perception 8"],
		['ano' => true, 'type' => "ano", 'name' => "Languages", 'text' => "Understands all languages it knew in life but cannot speak"],
		['ano' => true, 'type' => "ano", 'name' => "Challenge", 'text' => "1/4 (50 XP)"]
	]],
	'feats' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Undead Fortitude", 'text' => "If damage reduces the draugr to 0 hit points, it must make a <b class=\"die save com\">CON</b> saving throw with a DC of 5 + the damage taken, unless the damage is radiant or from a critical hit. On a success, the zombie drops to 1 hit point instead."]
	]],
	'actions' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Slam", 'text' => "<i>Melee Weapon Attack</i> +3 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg bludge\">4 (1d6 + 1)</b> bludgeoning damage."]
	]]
]; ?>