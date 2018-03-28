<?php $dunmer_race = [
	'name' => 'Dunmer (Dark Elves)',
	'image' => ['url' => 'races/dunmer.jpg', 'description' => 'A Dunmer Merchant'],
	'description' => 'Cursed by the Daedric Prince <em>Azura</em> with dark skin and red eyes, the Dunmer live in the north-east region of Tamriel called <em>Morrowind</em> (which they call <em>Resdayn</em>). Firm believers in living a harsh and disciplined life, the Dunmer have grown from their vulcanic homeland as a race of exceptional versatile warriors and sorcerers. The Dunmer are distrustful of other races and are considered by most to be proud, clannish, ruthless, and cruel, but value loyalty and family above most else.',
	'attributes' => [
		['attr' => 'STR', 'bonus' => '+1', 'break' => true],
		['attr' => 'DEX', 'bonus' => '+1', 'break' => true],
		['attr' => 'INT', 'bonus' => '+1', 'or' => true, 'break' => true],
		['bonus' => '(choose 2)', 'blank' => true]
	],
	'skills' => [
		['skill' => 'Arcana', 'bonus' => '+1'],
		['skill' => 'Athletics', 'bonus' => '+1'],
		['skill' => 'Stealth', 'bonus' => '+1'],
		['skill' => 'Survival', 'bonus' => '+1']
	],
	'proficiencies' => [
		['title' => 'Bladed Weapons'],
		['title' => 'Bows'],
		['title' => 'Destruction Magic', 'subs' => ['description' => 'Dunmer can add their proficiency bonus to the damage roll of spells they cast']]
	],
	'speed' => 50,
	'bonuses' => [
		['title' => 'Ancestor Guardian', 'description' => 'Once per long rest Dunmer can cast Sanctuary on themselves, providing a +2 bonus to AC for 1 minute'],
		['title' => 'Resist Fire', 'description' => 'Fire attacks deal half damage against Dunmer']
	]
];?>