<?php $bosmer_race = [
	name => 'Bosmer (Wood Elves)',
	image => [[url => 'races/bosmer.jpg', description => 'A Bosmer Hunter']],
	description => 'Heralding from the forest lands of <em>Valenwood</em>, the Bosmer have rejected the stringent, formal lifestyle of the Aldmeri (original elven) culture they left. They are a romantic and sometimes mischievous race of elves, and are quick-witted. They are considered the best archers in all of Tamriel and are rumored to have invented the bow. In Valenwood they live their lives in communion with nature, obeying a pact they made with their god, Y&rsquo;ffre, to not harm any plants, making them a carnivorous race that is rumored to engage in ritual cannibalism.',
	attributes => [
		[attr => 'DEX', bonus => '+2']
	],
	skills => [
		[skill => 'Acrobatics', bonus => '+2'],
		[skill => 'Nature', bonus => '+1'],
		[skill => 'Stealth', bonus => '+1']
	],
	proficiencies => [
		[title => 'Bow Masters', subs => [description => 'Bosmer are proficient in all bows and gain twice their proficiency bonus to attack rolls with bows']],
		[title => 'Light Armor', subs => [description => 'Bosmer gain their proficiency bonus to their AC when wearing Light armor']]
	],
	speed => 50,
	bonuses => [
		[title => 'Resist Common Disease', description => 'Altmer have a +3 bonus to saving throws against diseases'],
		[title => 'Beast Tongue', description => 'Once per long rest Bosmer can charm a creature of equal or lesser level for 10 minutes']
		]
];?>