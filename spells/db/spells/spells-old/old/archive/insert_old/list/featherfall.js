 function featherfall(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Feather Fall",
		school: "Transmutation",
		blockclass: "transmutation",
		subtitle: "1st-level Transmutation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "Special"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S, M (a amall feather or piece of down)"},
			{name: "Duration", value: "1 minute"}
		]},
		description: {props: [
			{h: true,  name: "Reaction", text:"When you or a creature within range falls"},
			{p: true,  text:"Choose up to five falling creatures within range. A falling creature&rsquo;s rate of descent slows to 60 feet per round until the spell ends. If the creature lands before the spell ends, it takes no falling damage and can land on its feet, and the spell ends for that creature."}
		]}
	});
	
	return rendered;
}