<?php $prestidigitation_spell = [
	'name' => "Prestidigitation",
	'school' => "transmutation",
	'type' => "Transmutation Cantrip",
	'level' => "0",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "Cantrip"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 action"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "10 feet"],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Up to 1 hour"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "This spell is a minor magical trick that novice spellcasters use for practice. You create one of the following magical effects within range:"],
		['lst' => true, 'type' => "lst", 'bulleted' => true, 'items' => [
			['text' => "You instantaneously light or snuff out a candle, a torch, or a small campfire."],
			['text' => "You instantaneously clean or soil an object no larger than 1 cubic foot."],
			['text' => "You chill, warm, or flavor up to 1 cubic foot of nonliving material for 1 hour."],
			['text' => "You make a color, a small mark, or a symbol appear on an object or a surface for 1 hour."],
			['text' => "You create a nonmagical trinket or an illusory image that can fit in your hand and that lasts until the end of your next turn."]
		]],
		['par' => true, 'type' => "par", 'text' => "If you cast this spell multiple times, you can have up to three of its non-instantaneous effects active at a time, and you can dismiss such an effect as an action."]
	]]
]; ?>