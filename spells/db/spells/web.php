<?php $web_spell = [
	'name' => "Web",
	'school' => "conjuration",
	'type' => "2nd-level Conjuration Spell",
	'level' => "2",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "2"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "60 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (a bit of spiderweb)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Concentration, up to 1 hour"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You conjure a mass of thick, sticky webbing at a point of your choice within range. The webs fill a 20-foot cube from that point for the duration. The webs are difficult terrain and lightly obscure their area."],
		['par' => true, 'type' => "par", 'text' => "If the webs aren&rsquo;t anchored between two solid masses (such as walls or trees) or layered across a floor, wall, or ceiling, the conjured web collapses on itself, and the spell ends at the start of your next turn. Webs layered over a flat surface have a depth of 5 feet."],
		['par' => true, 'type' => "par", 'text' => "Each creature that starts its turn in the webs or that enters them during its turn must make a <b class=\"die save dex\">DEX</b> saving throw. On a failed save, the creature is restrained as long as it remains in the webs or until it breaks free."],
		['par' => true, 'type' => "par", 'text' => "A creature restrained by the webs can use its actions to make a <b class=\"die save str\">STR</b> check against your spell save DC. If it succeeds, it is no longer restrained."],
		['par' => true, 'type' => "par", 'text' => "The webs are flammable. Any 5-foot cube of webs exposed to fire burns away in 1 round, dealing <b class=\"die dmg fire\">2d4</b> fire damage to any creature that starts its turn in the fire."]
	]],
]; ?>