
<?php $morokei_mob = [
	'name' => "Morokei",
	'size' => "Medium",
	'type' => "undead",
	'alignment' => "Chaotic Evil",
	'top_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Armor Class", 'text' => "12 (15 with <i>mage armor</i>)"],
		['ano' => true, 'type' => "ano", 'name' => "Hit Points", 'text' => "135 (18d8 + 54)"],
		['ano' => true, 'type' => "ano", 'name' => "Speed", 'text' => "30ft (hovering)"]
	]],
	'STR' => "11 (0)",
	'DEX' => "16 (+3)",
	'CON' => "16 (+3)",
	'INT' => "20 (+5)",
	'WIS' => "14 (+2)",
	'CHA' => "16 (+3)",
	'bot_props' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Saving Throws", 'text' => "INT +6, WIS +4"],
		['ano' => true, 'type' => "ano", 'name' => "Damage Resistances", 'text' => "cold, lightning, nectrotic"],
		['ano' => true, 'type' => "ano", 'name' => "Damage Immunities", 'text' => "poison, bludgeoning, piercing, and slashing from nonmagical attacks"],
		['ano' => true, 'type' => "ano", 'name' => "Condition Immunities", 'text' => "charmed, exhaustion, frightened, paralyzed, poisoned"],
		['ano' => true, 'type' => "ano", 'name' => "Senses", 'text' => "truesight 120 ft. passive Perception 19"],
		['ano' => true, 'type' => "ano", 'name' => "Languages", 'text' => "Cyrodiilic, Atmoran, Ehlnofex, Dragon, Falmeris, and Dwemeris"],
		['ano' => true, 'type' => "ano", 'name' => "Challenge", 'text' => "6 (2,300 XP)"]
	]],
	'feats' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Spellcasting.", 'text' => "The ritualist is a 9th-level spellcaster. Its spellcasting ability is Intelligence (DC 14, +6 to hit with spell attacks). The mage has the following wizard spells prepared:"],
		['par' => true, 'type' => "par", 'text' => "Cantrips (at will): <i>fire bolt, light, mage hand, prestidigitation</i><br/>1st level (4 slots): <i>detect magic, mage armor, magic missile, shield</i><br/>2nd level (3 slots): <i>misty step, suggestion</i><br/>4th level (3 slots): <i>greater invisibility, ice storm</i><br/>5th level (1 slot): <i>cone of cold</i>"]
	]],
	'actions' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Soul Rupture.", 'text' => "Morokei chooses three spots within 80 ft. Lich chrystals will spring from gound on chains. Any creatures within 5 ft. of the crystals must make a DEX saving throw. The creature takes <b class=\"die dmg necro\">2d10</b> necrotic damage on a failed save and half as much on a successful one."],
		['par' => true, 'type' => "par", 'text' => "Any creature which starts its turn within 5 ft. of the crystal takes <b class=\"die dmg cold\">1d6</b> cold damage. When Morokei starts his third turn after activation, the crystals explode, dealing <b class=\"die dmg cold\">1d6</b> cold damage to any creatures within 5 ft."],
		['ano' => true, 'type' => "ano", 'name' => "Necrobolts.", 'text' => "Morokei can create three <b>necrotic bolts</b>, firing each one independently in a striaght line to whatever target(s) he chooses within 120 ft. Morokei makes a ranged spell attack on the target. On a hit, the target takes <b class=\"die dmg necro\">1d10</b> necrotic damage and must make a <b class=\"die save wis\">WIS</b> saving throw or become Frightened until the end of its next turn."],
		['ano' => true, 'type' => "ano", 'name' => "Blink.", 'text' => "As a bonus action at the end of his turn, Morokei can disappear and materialize anywhere in sight within 30 ft."]
	]]
]; ?>