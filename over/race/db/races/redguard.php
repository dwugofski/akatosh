<?php $redguard_race = [
	name => 'Redguard',
	image => [[url => 'races/redguard.jpg', description => 'A Redguard Warrior']],
	description => 'The dark-skinned wiry-haired people from <em>Hammerfell</em> seem born to battle. However their pride and fierce independence of spirit makes them more suitable as scouts, skirmishers, or free-range adventurers than rank-and-file soldiers. Nevertheless Redguard armies have a reputation as fierce invaders. Originally from the now-destroyed continent of <em>Yokuda</em>, the Redguard are the descendents of an invasion force sent to Tamriel when a Yokudan war between men and mer lead to the sinking of the continent.',
	attributes => [
		[attr => 'STR', bonus => '+1', 'break' => true],
		[attr => 'DEX', bonus => '+1', 'break' => true],
		[attr => 'CON', bonus => '+1', 'or' => true, 'break' => true],
		[bonus => '(choose 2)', blank => true]
	],
	skills => [
		[skill => 'Athletics', bonus => '+1'],
		[skill => 'Acrobatics', bonus => '+1'],
		[skill => 'Intimidation', bonus => '+1'],
		[skill => 'Survival', bonus => '+1']
	],
	proficiencies => [
		[title => 'All Weapon Types'],
		[title => 'Light Armor', subs => [[description => 'Redguards gain their proficiency bonus to their AC when wearing Light armor']]],
		[title => 'Medium Armor', subs => [[description => 'Redguards gain their proficiency bonus to their AC when wearing Medium armor']]]
	],
	speed => 30,
	bonuses => [
		[title => 'Poison Resistance', description => 'Redguards have a +3 bonus on saving throws against the effects of poison'],
		[title => 'Resist Common Disease', description => 'Redguards have a +3 bonus on saving throws against the effects of diseases'],
		[title => 'Adrenaline Rush', description => 'Once per long rest Redguards can cast <i class="bred">Adrenaline Rush</i>, giving them the following effects for 1 hour =><ul><li>+1 to DEX mod</li><li>+1 to CON mod</li><li>+1 to STR mod</li><li>+10 speed</li><li>+1d12 temp HP</li></ul>']
		]
];?>