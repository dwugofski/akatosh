 function scorchingray(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Scorching Ray",
		school: "Evocation",
		blockclass: "evocation",
		subtitle: "2nd-level Evocation Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "120 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"You create three rays of fire and hurl them at targets within range. You can hurl them at one target or several."},
			{p: true,  text:"Make a ranged spell attack for each ray. On a hit, the target takes <b class=\"die dmg fire\">2d6</b> fire damage."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 3<sup>rd</sup> level or higher, you create one additional ray for each level above 2<sup>nd</sup>."}
		]}
	});
	
	return rendered;
}