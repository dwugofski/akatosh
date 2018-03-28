<?php $blindnessdeafness_spell = [
	'name' => "Blindness/Deafness",
	'school' => "necromancy",
	'type' => "2nd-level Necromancy Spell",
	'level' => "2",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "2"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "30 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "1 minute"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You can blind or deafen a foe. Choose one creature that you can see within range to make a <b class=\"die save con\">CON</b> saving throw. If it fails, the target is either blinded or deafened (your choice) for the duration. At the end of each of its turns, the target can make a <b class=\"die save con\">CON</b> saving throw. On a success, the spell ends."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, you can target one additional creature for each spell slot above 2<sup>nd</sup>."]
	]],
]; ?>