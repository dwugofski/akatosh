<?php $nord_race = [
	name => 'Nords',
	image => [[url => 'races/nord.jpg', description => 'A Nord Warrior']],
	description => 'The Nords are a race of fierce, strong, and enthusiastic warrior men who come from the frozen land of <em>Skyrim</em>. They are considered natural warriors and seamen by those around them. They are a proud and honorable race of warriors who revel in battle and military prowess. Originally from the frozen wasteland <em>Atmora</em>, north of Tamriel, the Nords were the first race of men to settle the content of the elves.',
	attributes => [
		[attr => 'STR', bonus => '+2', 'break' => true],
		[attr => 'CON', bonus => '+2', 'or' => true]
	],
	skills => [
		[skill => 'Athletics', bonus => '+3'],
		[skill => 'Survival', bonus => '+1']
	],
	proficiencies => [
		[title => 'Long Blades'],
		[title => 'Blunt Weapons'],
		[title => 'Axes'],
		[title => 'Spears'],
		[title => 'Medium Armor', subs => [[description => 'Nords gain their proficiency bonus to their AC when wearing Medium armor']]],
		[title => 'Heavy Armor', subs => [[description => 'Nords gain their proficiency bonus to their AC when wearing Heavy armor']]]
	],
	speed => 40,
	bonuses => [
		[title => 'Thunder First', description => 'Once per long rest Nords can inflict <b class="die dmg cold">1d6</b> of cold damage on touch to a target as a bonus action'],
		[title => 'Woad Shield', description => 'Once per long rest Nords can activate their Woad Shield, gaining a +1 AC bonus for 1 minute'],
		[title => 'Resist Shock', description => 'Any lightning damage to a Nord is halved'],
		[title => 'Frost Immunity', description => 'Nords are immune to cold damage']
		]
];?>