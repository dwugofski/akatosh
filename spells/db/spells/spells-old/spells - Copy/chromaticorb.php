<?php $chromaticorb_spell = [
	'name' => "Chromatic Orb",
	'school' => "evocation",
	'type' => "1st-level Evocation Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "90 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (a diamond worth at least 50 gp)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You hurl a 4-inch-diameter sphere of energy at a creature that you can see within range. You choose acid, cold, fire, lightning, poison, or thunder for the type of orb you create, and then make a ranged spell attack against the target. If the attack hits, the creature takes <b class=\"die dmg force\">3d8</b> damage of the type you chose."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg force\">1d8</b> for each slot level above 1st."]
	]],
]; ?>