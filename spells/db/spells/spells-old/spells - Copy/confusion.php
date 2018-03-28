<?php $confusion_spell = [
	'name' => "Confusion",
	'school' => "enchantment",
	'type' => "4th-level Enchantment Spell",
	'level' => "4",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "4"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "90 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (three nut shells)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Concentration, up to 1 minute"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "This spell assaults and twists creatures' minds, spawning delusions and provoking uncontrolled action. Each creature in a 10-foot-radius sphere centered on a point you choose within range must succeed a <b class=\"die save wis\">WIS</b> saving throw when you cast this spell or be affected by it."],
		['par' => true, 'type' => "par", 'text' => "An affected target can&rsquo;t take reactions and must roll a d10 at the start of each of its turns to determine its behavior for that turn."],
		['tab' => true, 'type' => "tab", 'rows' => [
		['row' => true, 'items' => [
			['rownum' => 0, 'centered' => true, 'heading' => true, 'text' => "d10"],
			['rownum' => 0, 'heading' => true, 'text' => "Behavior"]
		]],
		['row' => true, 'items' => [
			['rownum' => 1, 'centered' => true, 'text' => "1"],
			['rownum' => 1, 'text' => "The creature uses all its movement to move in a random direction. To determine the direction, roll a d8 and assign a direction to each die face. The creature doesn&rsquo;t take an action this turn."]
		]],
		['row' => true, 'items' => [
			['rownum' => 2, 'centered' => true, 'text' => "2&mdash;6"],
			['rownum' => 2, 'text' => "The creature doesn&rsquo;t move or take actions this turn."]
		]],
		['row' => true, 'items' => [
			['rownum' => 3, 'centered' => true, 'text' => "7&mdash;8"],
			['rownum' => 3, 'text' => "The creature uses its action to make a melee attack against a randomly determined creature within its reach. If there is no creature within its reach, the creature does nothing this turn."]
		]],
		['row' => true, 'items' => [
			['rownum' => 4, 'centered' => true, 'text' => "9&mdash;10"],
			['rownum' => 4, 'text' => "The creature can act and move normally."]
		]]
		]],
		['par' => true, 'type' => "par", 'text' => "At the end of each of its turns, an affected target can make a <b class=\"die save wis\">WIS<\b> saving throw. If it succeeds, this effect ends for that target."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 5th level or higher, the radius of the sphere increases by 5 feet for each slot level above 4th."]
	]],
]; ?>