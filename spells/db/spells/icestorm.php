<?php $icestorm_spell = [
	'name' => "Ice Storm",
	'school' => "evocation",
	'type' => "4th-level Evocation Spell",
	'level' => "4",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "4"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 Action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "300 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (a pinch of dust and a few drops of water)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "A hail of rock-hard ice pounds to the ground in a 20-foot-radius, 40-foot-high cylinder centered on a point within range. Each creature in the cylinder must make a DEX saving throw. A creature takes 2d8 bludgeoning damage and 4d6 cold damage on a failed save, or half as much damage on a successful one."],
		['par' => true, 'type' => "par", 'text' => "Hailstones turn the storm&rsquo;s area of effect into difficult terrain until the end of your next turn."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 5th level or higher, the bludgeoning damage increases by 1d8 for each slot level above 4th."]
	]]
]; ?>