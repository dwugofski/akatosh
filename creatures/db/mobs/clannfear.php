
<?php $clannfear_mob = [
	'name' => "Clannfear",
	'size' => "Medium",
	'type' => "daedra",
	'alignment' => "unaligned",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Armor Class", 'text' => "13 (natural armor)"],
		['ano' => true, 'type' => "ano", 'name' => "Hit Points", 'text' => "38 (6d10 + 8)"],
		['ano' => true, 'type' => "ano", 'name' => "Speed", 'text' => "60ft"]
	]],
	'STR' => "19 (+4)",
	'DEX' => "13 (+1)",
	'CON' => "17 (+3)",
	'INT' => "2 (-4)",
	'WIS' => "12 (+1)",
	'CHA' => "5 (-3)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Damage Resistance", 'text' => "fire"],
		['ano' => true, 'type' => "ano", 'name' => "Senses", 'text' => "Darkvision 120ft., passive Perception 12"],
		['ano' => true, 'type' => "ano", 'name' => "Languages", 'text' => "&mdash;"],
		['ano' => true, 'type' => "ano", 'name' => "Challenge", 'text' => "2 (450 XP)"]
	]],
	'feats' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Devil&rsquo;s Sight", 'text' => "Magical darkness does not impede the clannfear's vision."]
	]],
	'actions' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Bite", 'text' => "<i>Melee Weapon Attack</i> +6 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg pierce\">15 (2d10 + 4)</b> piercing damage."],
		['ano' => true, 'type' => "ano", 'name' => "Charge", 'text' => "A clannfear can charge in a straight line for 30 ft. Any creature in the path must make a DC 13 <b class=\"die save dex\">DEX</b> saving throw or be knocked prone. As well, any creature which failed the throw takes <b class=\"die dmg bludge\">8 (1d4 + 4)</b> bludgeoning damage. If no target is hit, or an obstacle blocks the clannfear from charging the full 30 ft., the clannfear is dazed until the next turn; it is incapacitated and any attacks rolls made against it have advantage."],
		['ano' => true, 'type' => "ano", 'name' => "Tail Swipe", 'text' => "<i>Melee Weapon Attack:</i> +6 to hit, reach 5 ft., circle. Hit: <b class=\"die dmg slash\">8 (1d8 + 4)</b> slashing damage."]
	]]
]; ?>