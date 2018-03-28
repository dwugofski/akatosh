function argonian() {
	var race = {
		name: 'Argonians (Saxhleel)',
		image: [{url: 'races/argonian.jpg', description: 'An Argonian Male'}],
		description: 'A race of lizard people from the swamp region of <em>Black Marsh</em>. The Argonians (also called “<em>Saxhleel</em>”) worship beings called the Hist who communicate with the Argonians through special trees (“Hist Trees”) native to Black Marsh. For many centuries and across all eras, Dunmer have engaged in the practice of enslaving Argonians. Most races look down on the Argonians as uncivilized savages.',
		attributes: [
			{attr: 'DEX', bonus: '+2', break: true},
			{attr: 'INT', bonus: '+2', or: true}
		],
		skills: [
			{skill: 'Athletics', bonus: '+2'},
			{skill: 'Nature', bonus: '+1'},
			{skill: 'Medicine', bonus: '+1'}
		],
		proficiencies: [
			{title: 'Medium Armor', subs: [{description: 'Argonians gain their proficiency bonus to their AC when wearing Medium armor'}]},
			{title: 'Spears'}
		],
		speed: 40,
		bonuses: [
			{title: 'Resist Common Disease', description: 'Argonians have a +3 bonus to saving throws against diseases'},
			{title: 'Scaled Skin', description: 'Tough Argonian hide provides a +1 bonus to AC regardless of equipment'},
			{title: 'Water Breathing', description: 'Argonians can breathe underwater'},
			{title: 'Resist Poison', description: 'Argonians are immune to the effects of poisons'},
			{title: 'Swamp Swimmers', description: 'Argonians gain a +10 bonus to speed when moving through water and do not suffer movement penalties moving through swampy terrain'},
			{title: 'Beast Claws', description: 'Argonians can deal a 1d6 (slashing) damage unarmed'}
		]
	};

	return race;
}