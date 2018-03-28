 function spiritualweapon(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Spiritual Weapon",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "2nd-level Evocation Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 bonus action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "1 minute"}
		]},
		description: {props: [
			{p: true,  text:"You create a floating, spectral weapon within range that lasts for the duration or until you cast this spell again. When you cast the spell, you can make a melee spell attack against a creature within 5 feet of the weapon. On a hit, the target takes force damage equal to <b class=\"die dmg force\">1d8</b> + your spellcasting ability modifier."},
			{p: true,  text:"As a bonus action on your turn, you can move the weapon up to 20 feet and repeat the attack against a creature within 5 feet of it."},
			{p: true,  text:"The weapon can take whatever form you choose. Clerics of deities who are associated with a particular weapon (as St. Cuthbert is known for his mace and Thor for his hammer) make this spell&rsquo;s effect resemble that weapon."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, the damage increases by <b class=\"die dmg force\">1d8</b> for every two slots above 2<sup>nd</sup>."}
		]}
	});
	
	return rendered;
}