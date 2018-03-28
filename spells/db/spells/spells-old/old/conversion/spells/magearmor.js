function magearmor() {
	var spell = {
		name: "Mage Armor",
		school: "abjuration",
		type: "1st-level Abjuration Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Touch"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a piece of cured leater)"},
			{ano: true, type: "ano", name: "Duration", text: "8 hours"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You touch a willing creature who isn&rsquo;t wearing armor, and a protective magical force surrounds it until the spell ends. The target&rsquo;s base AC becomes 13 + its <b class=\"die save dex\">DEX</b> modifier. The spell ends it if the target dons armor or if you dismiss the spell as an action."}
		]},
	};

	return spell;
}