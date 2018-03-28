<?php $melfsacidarrow_spell = [
	name => "Melf's Acid Arrow",
	school => "evocation",
	type => "2nd-level Evocation Spell",
	level => "2",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "2"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "90 feet"],
		[ano => true, type => "ano", name => "Component", text => "V, S, M (powdered rubarb leaf and an adder’s stomach)"],
		[ano => true, type => "ano", name => "Duration", text => "Instantaneous"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "A shimmering green arrow streaks toward a target within range and bursts in a spray of acid. Make a ranged spell attack against the target. On a hit, the target takes <b class=\"die dmg acid\">4d4</b> acid damage immediately and <b class=\"die dmg acid\">2d4</b> acid damage at the end of its next turn. On a miss, the arrow splashes the target with acid for half as much of the initial damage and no damage at the end of its next turn."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 3rd level or higher, the damage (both initial and later) increases by <b class=\"die dmg acid\">1d4</b> for each slot level above 2nd."]
	]],
]; ?>