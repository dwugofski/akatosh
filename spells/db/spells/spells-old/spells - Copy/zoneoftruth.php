<?php $zoneoftruth_spell = [
	name => "Zone of Truth",
	school => "enchantment",
	type => "2nd-level Enchantment Spell",
	level => "2",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "2"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "60 feet"],
		[ano => true, type => "ano", name => "Component", text => "V, S"],
		[ano => true, type => "ano", name => "Duration", text => "10 minutes"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "You create a magical zone that guards against deception in a 15-foot-radius sphere centered on a point of your choice within range. Until the spell ends, a creature that enters the spell&rsquo;s area for the first time on a turn or starts its turn there must make a <b class=\"die save cha\">CHA</b> saving throw. On a failed save, a creature can&rsquo;t speak a deliberate lie while in the radius. You know whether each creature succeeds or fails on its saving throw."],
		[par => true, type => "par", text => "An affected creature is aware of the spell and can thus avoid answering questions to which it would normally respond with a lie. Such creatures can be evasive in its answers as long as it remains within the boundaries of the truth."]
	]],
]; ?>