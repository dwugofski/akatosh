 function protectionfrompoison(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Protection from Poison",
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
			{name: "Duration", value: "1 hour"}
		]},
		description: {props: [
			{p: true,  text:"You touch a creature. If it is poisoned, you neutralize the poison. If more than one poison afflicts the target, you neutralize on poison that you know is present, or you neutralize one at random."},
			{p: true,  text:"For the duration, the target has advantage on saving throws against being poisoned, and it has resistance to poison damage."}
		]}
	});
	
	return rendered;
}