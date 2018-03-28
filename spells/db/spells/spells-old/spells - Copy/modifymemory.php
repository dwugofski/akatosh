<?php $modifymemory() [
	var spell = [
	name => "Modify Memory",
	school => "enchantment",
	type => "5th-level Enchantment Spell",
	level => "5",
	properties => [attributes => [
		[ano => true, type => "ano", name => "Level", text => "5"],
		[ano => true, type => "ano", name => "Casting Time", text => "1 action"],
		[ano => true, type => "ano", name => "Range", text => "30 feet"],
		[ano => true, type => "ano", name => "Component", text => "V, S"],
		[ano => true, type => "ano", name => "Duration", text => "Concentration, up to 1 minute"]
	]],
	description => [attributes => [
		[par => true, type => "par", text => "You attempt to reshape another creature&rsquo;s memories. One creature that you can see must make a <b class=\"die save wis\">WIS</b> saving throw. If you are fighting the creature, it has advantage on the saving throw. On a failed save, the target becomes charmed by you for the duration. The charmed target is incapacitated and unaware of its surroundings, though it can still hear you. If it takes any damage or is targeted by another spell, the spell ends, and none of the target&rsquo;s memories are modified."],
		[par => true, type => "par", text => "While this charm lasts, you can affect the target&rsquo;s memory of an event that it experienced within the last 24 hours and that lasted no more than 10 minutes. You can permanently eliminate all memory of the event, allow the target to recall the event with perfect clarity and exacting detail, change its memory of the details of the event, or create a memory of some other event."],
		[par => true, type => "par", text => "You must speak to the target to describe how its memories are affected, and it must be able to understand your language for the modified memories to take root. Its mind fills in any gaps in the details of your description. If the spell ends before you have finished describing the modified memories, the creature&rsquo;s memory isn&rsquo;t altered. Otherwise, the modified memories take hold when the spell ends."],
		[par => true, type => "par", text => "A modified memory doesn&rsquo't necessarily affect how a creature behaves, particularly if the memory contradicts the creature&rsquo;s natural inclinations, alignment, or beliefs. An illogical modified memory, such as implanting a memory of how much the creature enjoyed dousing itself in acid, is dismissed, perhaps as a bad dream. The DM might deem a modified memory too nonsensical to affect a creature in a significant manner."],
		[par => true, type => "par", text => "A <i>remove curse</i> or <i>greater restoration</i> spell cast on the target restores the creature&rsquo;s true memory."]
	]],
	higher => [attributes => [
		[par => true, type => "par", text => "When you cast this spell using a spell slot of 2nd level or higher, you can alter the target&rsquo;s memories of an event that took place up to 7 days ago (6th level), 30 days ago (7th level), 1 year ago (8th level), or any time in the creature&rsquo;s past (9th level)."]
	]],
	];

	return spell;
]