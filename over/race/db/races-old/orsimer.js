function orsimer() {
	var race = {
		name: 'Orsimer (Orcs)',
		image: [{url: 'races/orsimer.jpg', description: 'An Orc Warrior'}],
		description: 'The Orsimer are a race of proud, strong warrior people from the now-destroyed city of <em>Orsinium</em> in the Wrothgar Mountains which divide High Rock and Skyrim. Originally members of the Aldmer (the original elven) race, the ancestors of the modern Orsimer worshiped the Aedric god <em>Trinimac</em>. When Trinimac was destroyed by the Daedric Prince Boethia, Trinimac was turned into the Daedric Prince <em>Malacath</em> and his followers were transformed into the Orsimer. Now the Orcs follow Malacath and his code of law. Since the destruction of their home, Orsinium, they have established strongholds across Tamriel each led by its own chief, chosen as the strongest Orsimer in the stronghold. Orcs value strength above all else and are known as berserkers and fearsomely unkillable foes.',
		attributes: [
			{attr: 'CON', bonus: '+2'}
		],
		skills: [
			{skill: 'Athletics', bonus: '+2'},
			{skill: 'Indimidation', bonus: '+1'},
			{skill: 'Survival', bonus: '+1'}
		],
		proficiencies: [
			{title: 'Axes'},
			{title: 'Shield', subs: [{description: 'When wearing a shield, Orsimer add their proficiency bonus to their AC in addition to the +2 shield bonus'}]},
			{title: 'Medium Armor', subs: [{description: 'Orsimer gain their proficiency bonus to their AC when wearing Medium armor'}]},
			{title: 'Heavy Armor', subs: [{description: 'Orsimer gain their proficiency bonus to their AC when wearing Heavy armor'}]}
		],
		speed: 30,
		bonuses: [
			{title: 'Resist Magicka', description: 'Damaging spells against Orsimer suffer a -1 penalty to damage'},
			{title: 'Berserker Rage', description: 'Barbarian Orsimer can rage an additional number of times per long rest equal to his or her CON mod. Non-Barbarian Orsimer gain access to the rage feature of a level 1 Barbarian, but can only rage once per long rest'}
		]
	};

	return race;
}