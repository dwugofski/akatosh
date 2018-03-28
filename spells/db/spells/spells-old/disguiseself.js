function disguiseself() {
	var spell = {
		name: "Disguise Self",
		school: "illusion",
		type: "1st-level Illusion Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "Self"},
			{ano: true, type: "ano", name: "Component", text: "V, S"},
			{ano: true, type: "ano", name: "Duration", text: "1 hour"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You make yourself &mdash; including your clothing, armor, weapons, and other belongings on your person &mdash; look different until the spell ends or until you use your action to dismiss it. You can seem 1 foot shorter or taller and can appear thin, fat, or in between. You can&rsquo;t change your body type, so you must adopt a form that has the same basic arrangement of limbs. Otherwise, the extent of the illusion is up to you."},
			{par: true, type: "par", text: "The changes wrought by this spell fail to hold up to physical inspection. For example, if you use this spell to add a hat to your outfit, objects pass through the hat, and anyone who touches it would feel nothing or would feel your head and hair. If you use this spell to appear thinner than you are, the hand of someone who reaches out to touch you would bump into you while it was seemingly in midair."},
			{par: true, type: "par", text: "To discern that you are disguised, a creature can use its action to inspect your appearance and must succeed on an <b class=\"die save int\">INT</b> (Investigation) check against your spell save DC."}
		]}
	};

	return spell;
}