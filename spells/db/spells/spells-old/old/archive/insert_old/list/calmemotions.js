 function calmemotions(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Calm Emotions",
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
			{name: "Duration", value: "Concentration, up to 1 minute"}
		]},
		description: {props: [
			{p: true,  text:"You attempt to suppress strong emotions in a group of people. Each humanoid in a 20-foot-radius sphere centered on a point you choose within range must make a <b class=\"die save cha\">CHA</b> saving throw; a creature can choose to fail this saving throw if it wishes. If a creature fails its saving throw, choose one of the following two effects."},
			{p: true,  text:"You can suppress any effect causing a target to be charmed or frightened. When this spell ends, any suppressed effect resumes, provided that its duration has not expired in the meantime."},
			{p: true,  text:"Alternatively, you can make a target indifferent about creatures of your choice that it is hostile toward. This indifference ends if the target is attacked or harmed by a spell or if it witnesses any of its friends being harmed. When the spell ends, the creature becomes hostile again, unless the DM rules otherwise."}
		]}
	});
	
	return rendered;
}