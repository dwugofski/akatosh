<?php $calmemotions_spell = [
	'name' => "Calm Emotions",
	'school' => "enchantment",
	'type' => "2nd-level Enchantment Spell",
	'level' => "2",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "2"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "60 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Concentration, up to 1 minute"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You attempt to suppress strong emotions in a group of people. Each humanoid in a 20-foot-radius sphere centered on a point you choose within range must make a <b class=\"die save cha\">CHA</b> saving throw; a creature can choose to fail this saving throw if it wishes. If a creature fails its saving throw, choose one of the following two effects."],
		['par' => true, 'type' => "par", 'text' => "You can suppress any effect causing a target to be charmed or frightened. When this spell ends, any suppressed effect resumes, provided that its duration has not expired in the meantime."],
		['par' => true, 'type' => "par", 'text' => "Alternatively, you can make a target indifferent about creatures of your choice that it is hostile toward. This indifference ends if the target is attacked or harmed by a spell or if it witnesses any of its friends being harmed. When the spell ends, the creature becomes hostile again, unless the DM rules otherwise."]
	]],
]; ?>