
<?php $dragoncultassassin_mob = [
	'name' => "Dragon Cult Assassin",
	'size' => "Medium",
	'type' => "humanoid",
	'alignment' => "Lawful Evil",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Armor Class", 'text' => "15 (studded leather armor)"],
		['ano' => true, 'type' => "ano", 'name' => "Hit Points", 'text' => "78 (12d8 + 24)"],
		['ano' => true, 'type' => "ano", 'name' => "Speed", 'text' => "30ft"]
	]],
	'STR' => "11 (+0)",
	'DEX' => "16 (+3)",
	'CON' => "14 (+2)",
	'INT' => "13 (+1)",
	'WIS' => "11 (+0)",
	'CHA' => "10 (+0)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Saving Throws", 'text' => "DEX +6, INT +4"],
		['ano' => true, 'type' => "ano", 'name' => "Skills", 'text' => "Acrobatics +6, Deception +3, Perception +3, Stealth +9"],
		['ano' => true, 'type' => "ano", 'name' => "Damage Resistance", 'text' => "Poison"],
		['ano' => true, 'type' => "ano", 'name' => "Senses", 'text' => "passive Perception 13"],
		['ano' => true, 'type' => "ano", 'name' => "Languages", 'text' => "Thieves&rsquo; cant, Cyrodiilic, and Dragon"],
		['ano' => true, 'type' => "ano", 'name' => "Challenge", 'text' => "8 (3,900 XP)"]
	]],
	'feats' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Assassinate.", 'text' => "During its first turn, the assassin has advantage on attack rolls against any creature that hasn&rsquo;t taken a turn. Any hit the assassin scores against a surprised creature is a critical hit."],
		['ano' => true, 'type' => "ano", 'name' => "Evasion.", 'text' => "If the assassin is subjected to an effect that allows it to make a DEX saving throw to take only half damage, the assassin instead takes no damage if it succeeds on the saving throw, and only half damage if it fails."],
		['ano' => true, 'type' => "ano", 'name' => "Sneak Attack.", 'text' => "Once per turn, the assassin deals an extra 14 (4d6) damage when it hits a target with a weapon attack and has advantage on the attack roll, or when the target is within 5 feet of an ally of the assassin that isn&rsquo;t incapacitated and the assassin doesn&rsquo;t have disadvantage on the attack roll."]
	]],
	'actions' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Multiattack.", 'text' => "The assassin makes two melee attacks"],
		['ano' => true, 'type' => "ano", 'name' => "Shortsword.", 'text' => "<i>Melee Weapon Attack</i>: +6 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg pierce\">6 (1d6 + 3)</b> piercing damage, and the target must make a DC 15 CON saving throw, taking 24 (7d6) poison damage on a failed save, or half as much damage on a successful one."],
		['ano' => true, 'type' => "ano", 'name' => "Light Crossbow.", 'text' => "<i>Ranged Weapon Attack</i>: +6 to hit, range 80/320 ft., one target. Hit: <b class=\"die dmg pierce\">7 (1d8 + 3)</b> piercing damage, and the target must make a DC 15 CON saving throw, taking 24 (7d6) poison damage on a failed save, or half as much damage on a successful one."]
	]]
]; ?>