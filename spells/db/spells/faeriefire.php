<?php $faeriefire_spell = [
	'name' => "Faerie Fire",
	'school' => "evocation",
	'type' => "1st-level Evocation Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 bonus action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "60 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Concentration, up to 1 minute"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "Each object in a 20-foot cube within range is outlined in blue, green, or violet light (your choice). Any creature in the area when the spell is cast is also outlined in light if it fails a <b class=\"die save dex\">DEX</b> saving throw. For the duration, objects affected by the creature shed dim light in a 10-foot radius."],
		['par' => true, 'type' => "par", 'text' => "Any attack roll against an affected creature or object has advantae if the attacker can see it, and the affected creature or object can&rsquo;t benefit from being invisible."]
	]],
]; ?>