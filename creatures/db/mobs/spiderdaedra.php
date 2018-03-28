
<?php $spiderdaedra_mob = [
	'name' => "Spider Daedra",
	'size' => "Large",
	'type' => "daedra",
	'alignment' => "Neutral Evil",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Armor Class", 'text' => "18 (natural armor)"],
		['ano' => true, 'type' => "ano", 'name' => "Hit Points", 'text' => "75 (10d8 + 25)"],
		['ano' => true, 'type' => "ano", 'name' => "Speed", 'text' => "40ft"]
	]],
	'STR' => "9 (-1)",
	'DEX' => "14 (+2)",
	'CON' => "4 (-3)",
	'INT' => "16 (+3)",
	'WIS' => "14 (+2)",
	'CHA' => "18 (+4)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Skills", 'text' => "Stealth +7"],
		['ano' => true, 'type' => "ano", 'name' => "Senses", 'text' => "Darkvision 60ft., passive Perception 13"],
		['ano' => true, 'type' => "ano", 'name' => "Languages", 'text' => "Cyrodiilic, Aldmeris, Daedric"],
		['ano' => true, 'type' => "ano", 'name' => "Challenge", 'text' => "5 (1,800 XP)"]
	]],
	'feats' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Spider Climb", 'text' => "A spider daedra can climb walls, ceiling, and other difficult terrain without needing an ability check."],
		['ano' => true, 'type' => "ano", 'name' => "Web Sense", 'text' => "While on a web, a spider daedra can precisely locate any other creature also on the web."],
		['ano' => true, 'type' => "ano", 'name' => "Web Walker", 'text' => "A spider daedra can move through web without experiencing movement or AC penalties."]
	]],
	'actions' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Multiattack", 'text' => "Once per turn, a spider daedra can attack twice: once with its claws and once with its forelegs. However the spider daedra has disadvantage on both attack rolls."],
		['ano' => true, 'type' => "ano", 'name' => "Claws", 'text' => "<i>Melee Weapon Attack</i> +7 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg slash\">11 (2d6 + 4)</b> slashing damage."],
		['ano' => true, 'type' => "ano", 'name' => "Forelegs", 'text' => "<i>Melee Weapon Attack</i> +7 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg pierce\">22 (4d6 + 4)</b> piercing damage."],
		['ano' => true, 'type' => "ano", 'name' => "Cocoon", 'text' => "<i>(Cooldown 5-6)</i> A spider daedra can trap a target in a cocoon of web, immobilizing them and granting advantage on all attack rolls made against them. Succeeding a DC 20 <b class=\"die save str\">STR</b> check, a character can burst out of the cocoon. As well the cocoon can be broken by another creature (AC 10: Hp 5, vulnerable to fire, immune to bludgeoning, poison, and psychic damage)."]
	]]
]; ?>