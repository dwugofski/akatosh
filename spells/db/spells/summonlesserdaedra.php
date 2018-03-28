<?php $summonlesserdaedra_spell = [
	'name' => "Summon Lesser Daedra",
	'school' => "conjuration",
	'type' => "2nd-Level Conjuration Ritual",
	'level' => "2",
	'properties' => ['attributes' => [
		['ano' => true, 'type' => "ano", 'name' => "Level", 'text' => "2"],
		['ano' => true, 'type' => "ano", 'name' => "Casting Time", 'text' => "1 minute"],
		['ano' => true, 'type' => "ano", 'name' => "Range", 'text' => "30 ft."],
		['ano' => true, 'type' => "ano", 'name' => "Component", 'text' => "V, S, M (a number of daedra hearts - see description below)"],
		['ano' => true, 'type' => "ano", 'name' => "Duration", 'text' => "Concentraion, up to 1 hour"]
	]],
	'description' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "You use a number of daedra hearts to summon a daedra from Oblivion inside a summoning circle you draw. The summoned creature is friendly to you and your allies. It will follow you outside of combat. It obeys any verbal commands you give it (no action required by you). If you don&rsquo;t issue any commands to it, it defends itself from hostile creatures, otherwise takes no actions."]
	]],
	'higher' => ['attributes' => [
		['par' => true, 'type' => "par", 'text' => "The daedra summoned by this ritual is controlled by the slot level used for the ritual and the spell slot level available to the caster. See the table below for the daedra this ritual summons, as well as the slot level and number of hearts used to summon it."],
		['tab' => true, 'type' => "tab", 'rows' => [
		['row' => true, 'items' => [
			['rownum' => 0, 'centered' => true, 'heading' => true, 'text' =>"Slot Level"],
			['rownum' => 0, 'centered' => true, 'heading' => true, 'text' =>"Daedra Hearts"],
			['rownum' => 0, 'heading' => true, 'text' =>"Daedra Summoned"]
		]],
		['row' => true, 'items' => [
			['rownum' => 1, 'centered' => true, 'text' =>"2"],
			['rownum' => 1, 'centered' => true, 'text' =>"2"],
			['rownum' => 1, 'text' =>"Scamp"]
		]],
		['row' => true, 'items' => [
			['rownum' => 2, 'centered' => true, 'text' =>"5"],
			['rownum' => 2, 'centered' => true, 'text' =>"4"],
			['rownum' => 2, 'text' =>"Clannfear"]
		]],
		['row' => true, 'items' => [
			['rownum' => 3, 'centered' => true, 'text' =>"6"],
			['rownum' => 3, 'centered' => true, 'text' =>"8"],
			['rownum' => 3, 'text' =>"Daedroth"]
		]],
		['row' => true, 'items' => [
			['rownum' => 4, 'centered' => true, 'text' =>"8"],
			['rownum' => 4, 'centered' => true, 'text' =>"16"],
			['rownum' => 4, 'text' =>"Spider Daedra"]
		]]
		]]
	]],
]; ?>