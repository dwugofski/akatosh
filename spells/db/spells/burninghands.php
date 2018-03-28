<?php $burninghands_spell = [
	'name' => "Burning Hands",
	'school' => "evocation",
	'type' => "1st-level Evocation Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "Self (15-foot cone)"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "As you hold your hands with thumbs touching and fingers spread, a thin sheet of flames shoots forth from your outstretched fingertips. Each creature in a 15-foot cone must make a <b class=\"die save dex\">DEX</b> saving throw. A creature takes <b class=\"die dmg fire\">3d6</b> fire damage on a failed save, or half as much damage on a successful one."],
		['par' => true, 'type' => "par", 'text' => "The fire ignites any flammable objects in the area that aren&rsquo;t being worn or carried."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg fire\">1d6</b> for each slot level above 1st."]
	]],
]; ?>