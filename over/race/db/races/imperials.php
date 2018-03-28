<?php $imperials_race = [
	name => 'Imperials',
	image => [[url => 'races/imperial.jpg', description => 'An Imperial Legionnaire']],
	description => 'Leaders of the Empire based in <em>Cyrodiil</em>, the Imperials are a race of disciplined and shrewd men. They are largely descended from the Nedes, a race of humans who were largely enslaved by the <em>Aylieds</em> (Wild Elves) in Cyrodiil. After a slave revolution led by St. Alessia, they began to establish an empire over Cyrodiil. They are well-spoken and considered to be the most disciplined and law-abiding race in Tamriel.',
	attributes => [
		[attr => 'CHA', bonus => '+2']
	],
	skills => [
		[skill => 'Deception', bonus => '+1'],
		[skill => 'Persuasion', bonus => '+2'],
		[skill => 'Religion', bonus => '+1']
	],
	proficiencies => [
		[title => 'Long Blades'],
		[title => 'Blunt Weapons'],
		[title => 'Unarmed'],
		[title => 'Mercantilism', subs => [[description => 'Imperials are able to reduce the price of buying things by their proficiency bonus * 5 gp (down to as little as 1 gp)']]],
		[title => 'Light Armor', subs => [[description => 'Imperials gain their proficiency bonus to their AC when wearing Light armor']]]
	],
	speed => 30,
	bonuses => [
		[title => 'Star of the West', description => 'Once per long rest an Imperial can reduce the STR mod of the target by -1 and increase their STR mod by +1'],
		[title => 'Voice of the Emperor', description => 'Once per long rest an Imperial can charm a target for 15 seconds']
		]
];?>