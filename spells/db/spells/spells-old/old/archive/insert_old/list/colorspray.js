 function colorspray(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Color Spray",
		school: "Illusion",
		blockclass: "illusion",
		subtitle: "1st-level Illusion Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "Self (15-foot cone)"},
			{name: "Component", value: "V, S, M (a pinch of powder or sand that is colored red, yellow, and blue)"},
			{name: "Duration", value: "1 round"}
		]},
		description: {props: [
			{p: true,  text:"A dazzling array of flashing, colored light springs from your hand. Roll <b class=\"die\">6d10</b>, the total is how many hit points of creatures this spell can effect. Creatures in a 15-foot cone originating from you are affected in ascending order of their current hit points (ignoring unconscious creatures and creatures that can&rsquo;t see)."},
			{p: true,  text:"Starting with the creature that has the lowest current hit points, each creature affected by this spell is blinded until the spell ends. Subtract each creature&rsquo;s hit points from the total before moving on to the creature with the next lowest hit points. A creature&rsquo;s hit points must be equal to or less than the remaining total for the creature to be affected."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, roll an additional <b class=\"die\">2d10</b> for each slot level above 1st."}
		]}
	});
	
	return rendered;
}