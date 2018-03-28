<?php $command_spell = [
	'name' => "Command",
	'school' => "enchantment",
	'type' => "1st-level Enchantment Spell",
	'level' => "1",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "1"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "60 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "1 round"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You speak a one-word command to a creature you can see within range. The target must succeed on a <b class=\"die save wis\">WIS</b> saving throw or follow the command on its next turn. The spell has no effect if the target is undead, if it doesn&rsquo;t understand your language, or if your command is directly harmful to it."],
		['par' => true, 'type' => "par", 'text' => "Some typical commands and their effects follow. You might issue a command other than the ones described here. If you do so, the DM determines how the target behaves. If the target can&rsquo;t follow your command, the spell ends."],
		['par' => true, 'type' => "par", 'text' => "<b>Approach.</b> The target moves towards you by the fastest and most direct route, ending its turn if it moves within 5 feet of you."],
		['par' => true, 'type' => "par", 'text' => "<b>Drop.</b> The target drops whatever it is holding and then ends its turn."],
		['par' => true, 'type' => "par", 'text' => "<b>Flee.</b> The target spends its turn moving away from you by the fastest available means."],
		['par' => true, 'type' => "par", 'text' => "<b>Grovel.</b> The target falls prone and then ends its turn."],
		['par' => true, 'type' => "par", 'text' => "<b>Halt.</b> The target doesn&rsquo;t move and takes no actions. A flying creature stays aloft, provided it is able to do so. If it must move to stay aloft, it flies the minimum distance needed to remain in the air."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 2nd level or higher, you can target one additional creature for each slot level above 1st. The creatures must be within 30 feet of each other when you target them."]
	]],
]; ?>