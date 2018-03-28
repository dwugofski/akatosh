<?php $conductiveward_spell = [
	'name' => "Conductive Ward",
	'school' => "evocation",
	'type' => "1st-Level Evocation Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "Self"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "1 minute"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You charge yourself with elemental lightning, causing sparks of electricity to crackle around you. Whenever a creature attacks you with a ranged attack, a bolt of lightning shoots from you to the missile, reducing damage by <b class=\"die dmg\">1d4</b>. As well, whenever a creature attempts a melee attack against you, it must make a <b class=\"die save con\">CON</b> saving throw or be struck by electricity and paralyzed until the start of your next turn."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When this spell is cast using a spell slot of 2nd level or higher, the range damage reduced by the spell increases by <b class=\'die dmg\'>1d4</b> for each slot level above 1st."]
	]],
]; ?>