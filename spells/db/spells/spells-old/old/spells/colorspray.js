function colorspray() {
	var spell = {
		name: "Color Spray",
		school: "illusion",
		type: "1st-level Illusion Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Self (15-foot cone)"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a pinch of powder or sand that is colored red, yellow, and blue)"},
			{ano: true, type: "ano", name: "Duration", text: "1 round"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "A dazzling array of flashing, colored light springs from your hand. Roll <b class=\"die\">6d10</b>, the total is how many hit points of creatures this spell can effect. Creatures in a 15-foot cone originating from you are affected in ascending order of their current hit points (ignoring unconscious creatures and creatures that can&rsquo;t see)."},
			{par: true, type: "par", text: "Starting with the creature that has the lowest current hit points, each creature affected by this spell is blinded until the spell ends. Subtract each creature&rsquo;s hit points from the total before moving on to the creature with the next lowest hit points. A creature&rsquo;s hit points must be equal to or less than the remaining total for the creature to be affected."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 2nd level or higher, roll an additional <b class=\"die\">2d10</b> for each slot level above 1st."}
		]},
	};

	return spell;
}