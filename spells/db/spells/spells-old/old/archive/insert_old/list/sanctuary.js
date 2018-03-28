 function sanctuary(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Sanctuary",
		school: "Abjuration",
		blockclass: "abjuration",
		subtitle: "1st-level Abjuration Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 bonus action"},
			{name: "Range", value: "30 feet"},
			{name: "Component", value: "V, S, M (a small silver mirror)"},
			{name: "Duration", value: "1 minute"}
		]},
		description: {props: [
			{p: true,  text:"You ward a creature within range against attack. Until the spell ends, any creature who targets the warded creature with an attack or a harmful spell must first make a <b class=\"die save wis\">WIS</b> saving throw. On a failed save, the creature must choose a new target or lose the attack or spell. This spell doesn&rsquo;t protect the warded creature from area effects, such as the explosion of a fireball."},
			{p: true,  text:"If the warded creature makes an attack or casts a spell that affects an enemy creature, this spell ends."}
		]}
	});
	
	return rendered;
}