<?php $cloudofdaggers_spell = [
	'name' => "Cloud of Daggers",
	'school' => "evocation",
	'type' => "2nd-level Evocation Spell",
	'level' => "2",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "2"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "60 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (a sliver of glass)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Concentration, up to 1 minute"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You fill the air with spinning daggers in a cube 5 feet on each side, centered on a point you choose within range. A creature takes <b class=\"die dmg slash\">4d4</b> slashing damage when it enters the spell&rsquo;s area for the first time on a turn or starts its turn there."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 2nd level or higher, the initial damage increases by <b class=\"die dmg slash\">2d4</b> for each slot level above 1st."]
	]],
]; ?>