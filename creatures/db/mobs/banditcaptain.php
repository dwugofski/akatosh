
<?php $banditcaptain_mob = [
	'name' => "Bandit Captain",
	'size' => "Medium",
	'type' => "humanoid",
	'alignment' => "chaotic neutral",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Armor Class", 'text' => "15 (studded leather)"],
		['ano' => true, 'type' => "ano", 'name' => "Hit Points", 'text' => "65 (10d8 + 20)"],
		['ano' => true, 'type' => "ano", 'name' => "Speed", 'text' => "30ft"]
	]],
	'STR' => "15 (+2)",
	'DEX' => "16 (+3)",
	'CON' => "14 (+2)",
	'INT' => "14 (+2)",
	'WIS' => "11 (0)",
	'CHA' => "14 (+2)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Saving Throws", 'text' => "Str +4, Dex +5, Wis +2"],
		['ano' => true, 'type' => "ano", 'name' => "Skills", 'text' => "Athletics +4, Deception +4"],
		['ano' => true, 'type' => "ano", 'name' => "Senses", 'text' => "passive Perception 10"],
		['ano' => true, 'type' => "ano", 'name' => "Languages", 'text' => "any two languages"],
		['ano' => true, 'type' => "ano", 'name' => "Challenge", 'text' => "2 (450 XP)"]
	]],
	'feats' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Multiattack.", 'text' => "The captain makes three melee attacks: two with its scimitar and one with its dagger. Or the captain makes two ranged attacks with its daggers."]
	]],
	'actions' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Scimitar.", 'text' => "<i>Melee Weapon Attack</i>: +5 to hit, reach 5 ft., one creature. Hit: <b class=\"die dmg slash\">6 (1d6 + 3)</b> slashing damage."],
		['ano' => true, 'type' => "ano", 'name' => "Dagger.", 'text' => "<i>Melee or Ranged Weapon Attack</i>: +5 to hit, reach 5 ft. or range 80/320 ft., one target. Hit: <b class=\"die dmg pierce\">5 (1d4 + 3)</b> piercing damage."]
	]],
	'reactions' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Parry.", 'text' => "The captain adds 2 to its AC against one melee attack that would hit it. To do so, the captain must see the attacker and be wielding a melee weapon."]
	]]
]; ?>