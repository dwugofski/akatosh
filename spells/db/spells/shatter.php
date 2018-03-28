<?php $shatter_spell = [
	'name' => "Shatter",
	'school' => "evocation",
	'type' => "2nd-level Evocation Spell",
	'level' => "2",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "2"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "60 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (a chip of mica)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "A sudden loud ringing noise, painfully intense, erupts from a point of your choice within range. Each creature in a 10-foot-radius sphere centered on that point must make a <b class=\"die save con\">CON</b> saving throw. A creature takes <b class=\"die dmg thun\">3d8</b> thunder damage on a failed save, or half as much damage on a successful one. A creature made of inorganic material such as stone, crystal, or metal has disadvantage on this saving throw."],
		['par' => true, 'type' => "par", 'text' => "A nonmagical object that isn&rsquo;t being worn or carried also takes the damage if it&rsquo;s in the spell&rsquo;s area."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 3rd level or higher, the damage increases by <b class=\"die dmg thun\">1d8</b> for each slot level above 2nd."]
	]],
]; ?>