 function wardingbond(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Warding Bond",
		school: "Abjuration",
		blockclass: "abjuration",
		subtitle: "2nd-level Abjuration Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, S, M (a pair of platinum rings worth at least 50 gp each, which you and the target must wear for the duration)"},
			{name: "Duration", value: "1 hour"}
		]},
		description: {props: [
			{p: true,  text:"This spell wards a willing creature you touch and creates a mystic connection between you and the target until the spell ends."},
			{p: true,  text:"While the target is within 60 feet of you, it gains a +1 bonus to AC and saving throws, and it has resistance to all damage. Also, each time it takes damage, you take the same amount of damage."},
			{p: true,  text:"The spell ends if you drop to 0 hit points or if you and the target become separated by more than 60 feet. It also ends if the spell is cast again on either of the connected creatures. You can also dismiss the spell as an action."}
		]}
	});
	
	return rendered;
}