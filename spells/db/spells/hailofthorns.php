<?php $hailofthorns_spell = [
	'name' => "Hail of Thorns",
	'school' => "conjuration",
	'type' => "1st-level Conjuration Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 bonus action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "Self"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Concentration, up to 1 minute"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "The next time you hit a creature with a ranged weapon attack before the spell ends, this spell creates a rain of thorns that sprouts from your ranged weapon or ammunition. In addition to the normal effect of the attack, the target of the attack and each creature within 5 feet of it must make a <b class=\"die save dex\">DEX</b> saving throw. A creature takes <b class=\"die dmg pierce\">1d10</b> piercing damage on a failed save, or half as much damage on a successful one."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg pierce\">1d10</b> for each slot level above 1st (to a maximum of <b class=\"die dmg pierce\">6d10</b>)."]
	]],
	]; ?>