 function hex(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Hex",
		school: "Enchantment",
		blockclass: "enchanting",
		subtitle: "1st-level Enchantment Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 bonus action"},
			{name: "Range", value: "90 feet"},
			{name: "Component", value: "V, S, M (the petrified eye of a newt)"},
			{name: "Duration", value: "Concentration, up to 1 hour"}
		]},
		description: {props: [
			{p: true,  text:"You place a curse on a creature that you can see within range. Until the spell ends, you deal an extra <b class=\"die dmg necro\">1d6</b> necrotic damage to the target whenever you hit it with an attack. Also, choose one ability when you cast the spell. The target has disadvantage on ability checks made with the chosen ability."},
			{p: true,  text:"If the target drops to 0 hit points before this spell ends, you can use a bonus action on a subsequent turn of yours to curse a new creature."},
			{p: true,  text:"A remove curse cast on the target ends this spell early."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 3rd or 4th level, you can maintain your concentration on the spell for up to 8 hours. When you use a spell slot of 5th level or higher, you can maintain your concentration on the spell for up to 24 hours."}
		]}
	});
	
	return rendered;
}