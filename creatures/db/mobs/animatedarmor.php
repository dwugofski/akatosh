
<?php $animatedarmor_mob = [
	'name' => "Animated Armor",
	'size' => "Medium",
	'type' => "construct",
	'alignment' => "unaligned",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Armor Class", 'text' => "18 (natural armor)"],
		['ano' => true, 'type' => "ano", 'name' => "Hit Points", 'text' => "33 (6d8 + 6)"],
		['ano' => true, 'type' => "ano", 'name' => "Speed", 'text' => "25ft"]
	]],
	'STR' => "14 (+2)",
	'DEX' => "11 (0)",
	'CON' => "13 (+1)",
	'INT' => "1 (-5)",
	'WIS' => "3 (-4)",
	'CHA' => "1 (-5)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Damage Immunities", 'text' => "poison, psychic"],
		['ano' => true, 'type' => "ano", 'name' => "Condition Immunities", 'text' => "blinded, charmed, deafened, exhausted, frightened, parylized, petrified, poisoned"],
		['ano' => true, 'type' => "ano", 'name' => "Senses", 'text' => "blindsight 60ft. (blind beyond this radius), passive Perception 6"],
		['ano' => true, 'type' => "ano", 'name' => "Languages", 'text' => "&mdash;"],
		['ano' => true, 'type' => "ano", 'name' => "Challenge", 'text' => "1 (200 XP)"]
	]],
	'feats' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Antimagic Susceptibility", 'text' => "The armor is incapacitated while in the area of an antimagic field. If targeted by dispel magic, the armor must succeed on a <b class=\"die save con\">CON</b> saving throw against the caster&rsquo;s spell save DC or fall unconscious for 1 minute."],
		['ano' => true, 'type' => "ano", 'name' => "False Appearance", 'text' => "While the armor remains motionless, it is indistinguishable from a normal suit of armor."]
	]],
	'actions' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Multiattack", 'text' => "The armor makes two melee attacks."],
		['ano' => true, 'type' => "ano", 'name' => "Slam", 'text' => "<i>Melee Weapon Attack:</i> +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) bludgeoning damage."]
	]]
]; ?>