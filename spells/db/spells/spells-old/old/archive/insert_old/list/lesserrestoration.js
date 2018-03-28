 function lesserrestoration(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Lesser Restoration",
		school: "Abjuration",
		blockclass: "abjuration",
		subtitle: "2nd-level Abjuration Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"You touch a creature and can end either one disease or one condition afflicting it. The condition can be blinded, deafened, paralyzed, or poisoned."}
		]}
	});
	
	return rendered;
}