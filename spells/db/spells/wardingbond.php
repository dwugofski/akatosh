<?php $wardingbond_spell = [
	'name' => "Warding Bond",
	'school' => "abjuration",
	'type' => "2nd-level Abjuration Spell",
	'level' => "2",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "2"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "Touch"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (a pair of platinum rings worth at least 50 gp each, which you and the target must wear for the duration)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "1 hour"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "This spell wards a willing creature you touch and creates a mystic connection between you and the target until the spell ends."],
		['par' => true, 'type' => "par", 'text' => "While the target is within 60 feet of you, it gains a +1 bonus to AC and saving throws, and it has resistance to all damage. Also, each time it takes damage, you take the same amount of damage."],
		['par' => true, 'type' => "par", 'text' => "The spell ends if you drop to 0 hit points or if you and the target become separated by more than 60 feet. It also ends if the spell is cast again on either of the connected creatures. You can also dismiss the spell as an action."]
	]],
]; ?>