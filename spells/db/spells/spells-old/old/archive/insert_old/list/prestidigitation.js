 function prestidigitation(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Prestidigitation",
		school: "Transmutation",
		blockclass: "transmutation",
		subtitle: "Transmutation Cantrip",
		cantrip: true,
		level: 0,
		properties: {props: [
			{name: "Level", value: "Cantrip"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "10 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Up to 1 hour"}
		]},
		description: {props: [
			{p: true,  text:"This spell is a minor magical trick that novice spellcasters use for practice. You create one of the following magical effects within range:"},
			{list: true, dashed: true, items: [
				{text: "You instantaneously light or snuff out a candle, a torch, or a small campfire."},
				{text: "You instantaneously clean or soil an object no larger than 1 cubic foot."},
				{text: "You chill, warm, or flavor up to 1 cubic foot of nonliving material for 1 hour."},
				{text: "You make a color, a small mark, or a symbol appear on an object or a surface for 1 hour."},
				{text: "You create a nonmagical trinket or an illusory image that can fit in your hand and that lasts until the end of your next turn."}
			]},
			{p: true,  text:"If you cast this spell multiple times, you can have up to three of its non-instantaneous effects active at a time, and you can dismiss such an effect as an action."}
		]}
	});
	
	return rendered;
}