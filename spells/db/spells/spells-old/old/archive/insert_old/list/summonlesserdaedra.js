 function summonlesserdaedra(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Summon Lesser Daedra",
		school: "Conjuration",
		blockclass: "conjuration",
		subtitle: "2nd-Level Conjuration Ritual",
		cantrip: true,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 minute"},
			{name: "Range", value: "30 ft."},
			{name: "Component", value: "V, S, M (a number of daedra hearts - see description below)"},
			{name: "Duration", value: "Concentraion, up to 1 hour"}
		]},
		description: {props: [
			{p: true,  text:"You use a number of daedra hearts to summon a daedra from Oblivion inside a summoning circle you draw. The summoned creature is friendly to you and your allies. It will follow you outside of combat. It obeys any verbal commands you give it (no action required by you). If you don&rsquo;t issue any commands to it, it defends itself from hostile creatures, otherwise takes no actions."}
		]},
		higher: {props: [
			{p:true, text: "The daedra summoned by this ritual is controlled by the slot level used for the ritual and the spell slot level available to the caster. See the table below for the daedra this ritual summons, as well as the slot level and number of hearts used to summon it."},
			{table:true, rows: [
				{heading: true, items: [
					{center: true, text: "Slot Level"},
					{center: true, text: "Daedra Hearts"},
					{text: "Daedra Summoned"}
				]},
				{items: [
					{center: true, text: "2"},
					{center: true, text: "2"},
					{text: "Scamp"}
				]},
				{items: [
					{center: true, text: "5"},
					{center: true, text: "4"},
					{text: "Clannfear"}
				]},
				{items: [
					{center: true, text: "6"},
					{center: true, text: "8"},
					{text: "Daedroth"}
				]},
				{items: [
					{center: true, text: "8"},
					{center: true, text: "16"},
					{text: "Spider Daedra"}
				]}
			]}
		]}
	});
	
	return rendered;
}