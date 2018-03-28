<?php $falselife_spell = [
	name => "False Life",
	school => "necromancy",
	type => "1st-Level Necromancy Spell",
	level => "1",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "1"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "Self"],
		[ano => true, type => "ano", name => "Component", text => "V, S, M (a amall amount of alcohol or distilled spirits)"],
		[ano => true, type => "ano", name => "Duration", text => "1 hour"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "Bolstering yourself with a necromantic facsimile of life, you gain <b class=\"die heal tmp\">1d4 + 4</b> temporary hit points for the duration."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 2nd level or higher, you gain <b class=\"die heal tmp\">5</b> additional temporary hit points for each slot level above 1st."]
	]],
]; ?>