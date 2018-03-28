 function magearmor(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Mage Armor",
		school: "Abjuration",
		blockclass: "abjuration",
		subtitle: "1st-level Abjuration Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Touch"},
			{name: "Component", value: "V, S, M (a piece of cured leater)"},
			{name: "Duration", value: "8 hours"}
		]},
		description: {props: [
			{p: true,  text:"You touch a willing creature who isn&rsquo;t wearing armor, and a protective magical force surrounds it until the spell ends. The target&rsquo;s base AC becomes 13 + its <b class=\"die save dex\">DEX</b> modifier. The spell ends it if the target dons armor or if you dismiss the spell as an action."}
		]}
	});
	
	return rendered;
}