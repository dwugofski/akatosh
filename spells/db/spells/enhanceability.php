<?php $enhanceability_spell = [
	'name' => "Enhance Ability",
	'school' => "transmutation",
	'type' => "2nd-level Transmutation Spell",
	'level' => "2",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "2"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "Touch"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (fur from a beast)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Concentration, up to 1 hour"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You touch a creature and bestow upon it a magical enhancement. Choose one of the following effects => the target gains the effect until the spell ends."],
		['ano' => true, 'type' => "ano", 'name' => "Bear&rsquo;s Endurance", 'text' => "The target has advantage on <b class=\"die save con\">CON</b> checks. It also gains <b class=\"die heal tmp\">2d6</b> temporary hit points, which are lost when the spell ends."],
		['ano' => true, 'type' => "ano", 'name' => "Bull&rsquo;s Strength", 'text' => "The target has advantage on <b class=\"die save str\">STR</b> checks, and his or her carrying capacity doubles."],
		['ano' => true, 'type' => "ano", 'name' => "Cat&rsquo;s Grace", 'text' => "The target has advantage on <b class=\"die save dex\">DEX</b> checks. It also doesn&rsquo;t take damage from falling 20 feet or less if it isn&rsquo;t incapacitated."],
		['ano' => true, 'type' => "ano", 'name' => "Eagle&rsquo;s Splendor", 'text' => "The target has advantage on <b class=\"die save cha\">CHA</b> checks."],
		['ano' => true, 'type' => "ano", 'name' => "Fox&rsquo;s Cunning", 'text' => "The target has advantage on <b class=\"die save int\">INT</b> checks."],
		['ano' => true, 'type' => "ano", 'name' => "Owl&rsquo;s Wisdom", 'text' => "The target has advantage on <b class=\"die save wis\">WIS</b> checks."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, you can target one additional creature for each slot level above 2<sup>nd</sup>."]
	]],
]; ?>