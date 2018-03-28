 function flamingsphere(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Flaming Sphere",
		school: "Conjuration",
		blockclass: "conjuration",
		subtitle: "2nd-level Conjuration Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S, M (a bit of tallow, a pinch of brimstone, and a dusting of powdered iron)"},
			{name: "Duration", value: "Concentration, up to 1 minute"}
		]},
		description: {props: [
			{p: true,  text:"A 5-foot diameter sphere of fire appears in an unoccupied space of your choice within range and lasts for the duration. Any creature that ends its turn within 5 feet of the sphere must make a <b class=\"die save dex\">DEX</b> saving throw. The creature takes <b class=\"die dmg fire\">2d6</b> fire damage on a failed save, or half as much damage on a successful one."},
			{p: true,  text:"As a bonus action, you can move the sphere up to 30 feet. If you ram the sphere into a creature, that creature must make the saving throw against the sphere's damage, and the sphere stops moving this turn."},
			{p: true,  text:"When you move the sphere, you can direct it over barriers up to five feet tall and jump it across pits up to 10 feet wide. The sphere ignites any flammable objects not being work or carried, and it sheds bright light in a 20-foot radius and dim light for an additional 20 feet."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, the damage increases by <b class=\"die dmg fire\">1d6</b> for each slot level above 2<sup>nd</sup>."}
		]}
	});
	
	return rendered;
}