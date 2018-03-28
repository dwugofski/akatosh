function altmer() {
	var race = {
		name: 'Altmer (High Elves)',
		image: [{url: 'races/altmer.jpg', description: 'An Altmer Male'}],
		description: 'The Altmer consider themselves to be the most civilized of all races. This yellow/golden skinned race of elves come from the <em>Summerset Isles</em> and are very proficient with magicka. While many races resent their arrogant attitudes, Altmer tend to be at the forefront of arts, crafts, laws, and the sciences.',
		attributes: [
			{attr: 'INT', bonus: '+2'}
		],
		skills: [
			{skill: 'Arcana', bonus: '+2'},
			{skill: 'History', bonus: '+1'},
			{skill: 'Investigation', bonus: '+1'}
		],
		proficiencies: [
			{title: 'Destruction Magic', subs: [{description: 'Altmer can add their proficiency bonus to the damage roll of spells they cast'}]}
		],
		speed: 30,
		bonuses: [
			{title: 'Resist Common Disease', description: 'Altmer have a +3 bonus to saving throws against diseases'},
			{title: 'Magicka Weakness', description: 'Altmer suffer an additional +1 damage when damaged by spells'},
			{title: 'Magicka Fortrification', description: 'On a short rest, Altmer can recover an additional number of spell slots equal to their INT modifier. This ability can only be used once per long rest'}
		]
	};

	return race;
}