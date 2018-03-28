 function findtraps(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Find Traps",
		school: "Divination",
		blockclass: "divination",
		subtitle: "2nd-level Divination Spell",
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
			{p: true,  text:"You sense the presence of any trap within range that is within line of sight. A trap, for the purpose of this spell, includes anything that would inflict a sudden or unexpected effect you consider harmful or undesirable, which was specifically intended as such by its creator. Thus, the spell would sense an area affected by the alarm spell, a glyph of warding, or a mechanical pit trap, but it would not reveal a natural weakness in the floor, an unstable ceiling, or a hidden sinkhole."},
			{p: true,  text:"This spell merely reveals that a trap is present. You don&rsquo;t learn the location of each trap, but you do learn the general nature of the danger posed by a trap you sense."}
		]}
	});
	
	return rendered;
}