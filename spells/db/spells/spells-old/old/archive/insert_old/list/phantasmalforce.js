 function phantasmalforce(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Phantasmal Force",
		school: "Illusion",
		blockclass: "illusion",
		subtitle: "2nd-level Illusion Spell",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "60 feet"},
			{name: "Component", value: "V, S, M (a bit of fleece)"},
			{name: "Duration", value: "Concentration, up to 1 minute"}
		]},
		description: {props: [
			{p: true,  text:"You craft an illusion that takes root in the mind of a creature that you can see within range. The target must make an <b class=\"die save int\">INT</b> saving throw. On a failed save, you create a phantasmal object, creature, or other visible phenomenon of your choice that is no larger than a 10-foot cube and that is perceivable only to the target for the duration. This spell has no effect on undead or constructs."},
			{p: true,  text:"The phantasm includes sound, temperature, and other stimuli, also evident only to the creature."},
			{p: true,  text:"The target can use its action to examine the phantasm with an <b class=\"die save int\">INT</b> (Investigation) check against your spell save DC. If the check succeeds, the target realizes that the phantasm is an illusion, and the spell ends."},
			{p: true,  text:"While a target is affected by the spell, the target treats the phantasm as if it were real. The target rationalizes any illogical outcomes from interacting with the phantasm."},
			{p: true,  text:"An affected target is so convinced of the phantasm&rsquo;s reality that it can even take damage from the illusion. A phantasm created to appear as a creature can attack the target. Similarly, a phantasm created to appear as fire, a pool of acid, or lava can burn the target. Each round on your turn, the phantasm can deal <b class=\"die dmg force\">1d6</b> psychic damage to the target if it is in the phantasm&rsquo;s area or within 5 feet of the phantasm, provided that the illusion is of a creature or hazard that could logically deal damage, such as by attacking."}
		]}
	});
	
	return rendered;
}