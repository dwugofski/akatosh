 function protectionfromevilandgood(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Protection from Evil and Good",
		school: "Abjuration",
		blockclass: "abjuration",
		subtitle: "1st-level Abjuration Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, S, M (holy water or powdered silver and iron, which the spell consumes)"},
			{name: "Duration", value: "Concentration, up to 10 minutes"}
		]},
		description: {props: [
			{p: true,  text:"Until the spell ends, one willing creature you touch is protected against certain types of creatures: aberrations, celestials, elementals, fey, fiends, and undead."},
			{p: true,  text:"The protection grants several benefits. Creatures of those types have disadvantage on attack rolls against the target. The target also cannot be charmed, firghtened, or possessed by them. If the target is already charmed, frightened, or possessed by such a creature, the targe has advantage on any new saving throw against the relevant effect."}
		]}
	});
	
	return rendered;
}