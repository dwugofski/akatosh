 function zoneoftruth(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Zone of Truth",
		school: "Enchantment",
		blockclass: "enchanting",
		subtitle: "2nd-level Enchantment Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S"},
			{name: "Duration", value: "10 minutes"}
		]},
		description: {props: [
			{p: true,  text:"You create a magical zone that guards against deception in a 15-foot-radius sphere centered on a point of your choice within range. Until the spell ends, a creature that enters the spell&rsquo;s area for the first time on a turn or starts its turn there must make a <b class=\"die save cha\">CHA</b> saving throw. On a failed save, a creature can&rsquo;t speak a deliberate lie while in the radius. You know whether each creature succeeds or fails on its saving throw."},
			{p: true,  text:"An affected creature is aware of the spell and can thus avoid answering questions to which it would normally respond with a lie. Such creatures can be evasive in its answers as long as it remains within the boundaries of the truth."}
		]}
	});
	
	return rendered;
}