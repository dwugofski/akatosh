 function gentlerepose(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Gentle Repose",
		school: "Necromancy",
		blockclass: "necromancy",
		subtitle: "2nd-level Necromancy Ritual",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, S, M (a pinch of salt and one copper piece placed on each of the corpse&rsquo;s eyes, which must remain there for the duration)"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"You touch a corpse or other remains. For the duration, the target is protected from decay and can&rsquo;t become undead."},
			{p: true,  text:"The spell also effectively extends the time limit on raising the target from the dead, since days spent under the influence of this spell don&rsquo;t count against the time limit of spells such as raise dead."}
		]}
	});
	
	return rendered;
}