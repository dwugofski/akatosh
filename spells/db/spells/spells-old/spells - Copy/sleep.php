<?php $sleep() [
	var spell = [
	name => "Sleep",
	school => "enchantment",
	type => "1st-level Enchantment Spell",
	level => "1",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "1"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "90 feet"],
		[ano => true, type => "ano", name => "Component", text => "V, S, M (a pinch of fine sand, rose petals, or a cricket)"],
		[ano => true, type => "ano", name => "Duration", text => "1 minute"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "This spell sends creatures into a magical slumber. Roll <b class=\"die\">5d8</b>; the total is how many hit points of creatures this spell can affect. Creatures within 20 feet of a point you choose within range are affected in ascending order of their current hit points (ignoring unconscious creatures)."],
		[par => true, type => "par", text => "Starting with the creature that has the lowest current hit points, each creature affected by this spell falls unconscious until the spell ends, the sleeper takes damage, or someone uses an action to shake or slap the sleeper awake. Subtract each creature&rsquo;s hit points from the total before moving on to the next creature with the next lowest hit points. A creature&rsquo;s hit points must be equal to or less than the remaining total for that creature to be affected."],
		[par => true, type => "par", text => "Undead and creatures immune to being charmed aren&rsquo;t affected by the spell."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 2nd level or higher, roll an additional <b class=\"die\">2d8</b> for each slot level above 1st."]
	]]
	];

	return spell;
]