<?php $breton_race = [
	name => 'Bretons',
	image => [[url => 'races/breton.jpg', description => 'A Breton Farmer']],
	description => 'Bretons are the descendents of lineage combining both men and mer. Ultimately they are considered men and possess the greatest affinity for magicka of any other race of men, rivaled only by the Altmer. They come from the northern region of <em>High Rock</em> and their feudal society is inundated with court intrigue and class struggles.',
	attributes => [
		[attr => 'INT', bonus => '+2', 'break' => true],
		[attr => 'WIS', bonus => '+2', 'or' => true]
	],
	skills => [
		[skill => 'Arcana', bonus => '+1'],
		[skill => 'Deception', bonus => '+1'],
		[skill => 'Persuasion', bonus => '+1'],
		[skill => 'Religion', bonus => '+1']
	],
	proficiencies => [
		[title => 'Restoration Magic', subs => [[description => 'Bretons add their proficiency bonus to the amount healed by any healing spells they cast']]]
	],
	speed => 30,
	bonuses => [
		[title => 'Dragon Skin', description => 'Once per day Bretons can receive a +2 bonus to AC for 1 minute'],
		[title => 'Resist Magicka', description => 'Damaging spells against Bretons suffer a -1 penalty to damage'],
		[title => 'Lesser Magicka Fortrification', description => 'When taking a short rest, Bretons can recover up to half their INT modifier in additional spell slots. This ability can only be used once per long rest.']
		]
];?>