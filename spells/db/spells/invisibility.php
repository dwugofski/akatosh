<?php $invisibility_spell = [
	'name' => "Invisibility",
	'school' => "illusion",
	'type' => "2nd-level Illusion Spell",
	'level' => "2",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "2"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "Touch"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (an eyelash encased in gum arabic)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Concentration, up to 1 hour"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "A creature you touch becomes invisible until the spell ends. Anything the target is wearing or carrying is invisible as long as it is on the target&rsquo;s person. The spell ends for a target that attacks or casts a spell."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "When you cast this spell using a spell slot of 3rd level or higher, you can target one additional creature for each slot level above 2nd."]
	]]
]; ?>