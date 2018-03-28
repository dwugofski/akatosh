 function magicweapon(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Magic Weapon",
		school: "Transmutation",
		blockclass: "transmutation",
		subtitle: "2nd-level Transmutation Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Concentration, up to 1 hour"}
		]},
		description: {props: [
			{p: true,  text:"You touch a nonmagical weapon. Until the spell ends, that weapon becomes a magic weapon with a +1 bonus to attack rolls and damage rolls."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 4<sup>th</sup> level or higher, the bonus increases to +2. When you use a spell slot of 6<sup>th</sup> level or higher, the bonus increases to +3."}
		]}
	});
	
	return rendered;
}