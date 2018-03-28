<?php $witchbolt_spell = [
	name => "Witch Bolt",
	school => "evocation",
	type => "1st-level Evocation Spell",
	level => "1",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "1"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "30 feet"],
		[ano => true, type => "ano", name => "Component", text => "V, S, M (a twig from a tree that has been struck by lightning)"],
		[ano => true, type => "ano", name => "Duration", text => "Concentration, up to 1 minute"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "A beam of crackling, blue energy lances out toward a creature within range, forming a sustained arc of lightning between you and the target. Make a ranged spell attack against that creature. On a hit, the target takes <b class=\"die dmg lightning\">1d12</b> lightning damage, and on each of your turns for the duration, you can use your action to deal <b class=\"die dmg lightning\">1d12</b> lightning damage to the target automatically. The spell ends if you use your action to do anything else. The spell also ends if the target is ever outside the spell&rsquo;s range or if it has total cover from you."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 2nd level or higher, the initial damage increases by <b class=\"die dmg lightning\">1d12</b> for each slot level above 1st."]
	]],
]; ?>