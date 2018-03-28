 function chilltouch(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Chill Touch",
		school: "Necromancy",
		blockclass: "necromancy",
		subtitle: "Necromancy Cantrip",
		cantrip: true,
		level: 0,
		properties: {props: [
			{name: "Level", value: "Cantrip"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "120 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "1 round"}
		]},
		description: {props: [
			{p: true,  text:"You create a ghostly, skeletal hand in the space of a creature within range. Make a ranged spell attack against the creature to assail it with the chill of the grave. On a hit, the target takes <b class='die dmg necro'>1d8</b> necrotic damage, and it can't regain hit points until the start of your next turn. Until then, the hand clings to the target. If you hit an undead target, it also has disadvantage on attack rolls against you until the end of your next turn."}
		]},
		higher: {props: [
			{p:true, text: "This spell&rsquo;s damage increases by <b class='die dmg necro'>1d8</b> when you reach 5th level (<b class='die dmg necro'>2d8</b>), 11th level (<b class='die dmg necro'>3d8</b>), and 17th level (<b class='die dmg necro'>4d8</b>)."}
		]}
	});
	
	return rendered;
}