<?php $armsofhadar_spell = [
	'name' => "Arms of Hadar",
	'school' => "conjuration",
	'type' => "1st-level Conjuration Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action "],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "Self (10-foot radius)"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Instantaneous"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You invoke the power of Hadar, the Dark Hunger. Tendrils of dark energy erupt from you and batter all creatures within 10 feet of you. Each creature in that area must make a <b class=\"die save str\">STR</b> saving throw. On a failed save, a target takes <b class=\"die dmg necro\">2d6</b> necrotic damage and can&rsquo;t take reactions until its next turn. On a successful save, the creature takes half damage, but suffers no other effect. "]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg necro\">1d6</b> for each slot level above 1st."]
	]],
]; ?>