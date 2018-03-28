<?php $khajiit_race = [
	name => 'Khajiit',
	image => [[url => 'races/khajiit.jpg', description => 'A Khajiit Merchant']],
	description => 'Leaders of the Empire based in <em>Cyrodiil</em>, the Imperials are a race of disciplined and shrewd men. They are largely descended from the Nedes, a race of humans who were largely enslaved by the <em>Aylieds</em> (Wild Elves) in Cyrodiil. After a slave revolution led by St. Alessia, they began to establish an empire over Cyrodiil. They are well-spoken and considered to be the most disciplined and law-abiding race in Tamriel.',
	attributes => [
		[attr => 'DEX', bonus => '+2']
	],
	skills => [
		[skill => 'Acrobatics', bonus => '+2'],
		[skill => 'Stealth', bonus => '+1'],
		[skill => 'Sleight-of-Hand', bonus => '+1']
	],
	proficiencies => [
		[title => 'Short Blades'],
		[title => 'Unarmed'],
		[title => 'Light Armor', subs => [[description => 'Khajiit gain their proficiency bonus to their AC when wearing Light armor']]]
	],
	speed => 40,
	bonuses => [
		[title => 'Eye of Night', description => 'Once per long rest a Khajiit can cast Night Eye, granting them Darkvision (60 ft) for 30 sec'],
		[title => 'Eye of Fear', description => 'Once per day a Khajiit can demoralize a target. The target must make a DC 18 WIS saving throw or run away in fear for 30 sec'],
		[title => 'Beast Claws', description => 'Khajiit can deal a 1d6 (slashing) damage unarmed']
		]
];?>