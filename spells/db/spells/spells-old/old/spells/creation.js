function creation() {
	var spell = {
		name: "Creation",
		school: "illusion",
		type: "5th-level Illusion Spell",
		level: "5",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "5"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 minute"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a tiny piece of matter of the same type of the item you plan to create)"},
			{ano: true, type: "ano", name: "Duration", text: "Special"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You pull whisps of shadow material from the Shadowfell to create a nonliving object of vegetable matter within range: soft goods, rope, wood, or something similar. You can also use this spell to create mineral objects such as stone, crystal, or metal. The object created must be of a form and material you have seen before."},
			{par: true, type: "par", text: "The duration depends on the object&rsquo;s material. If the object is composed of multiple materials, use the shortest duration."},
			{tab: true, type: "tab", rows: [
				{row: true, items: [
					{rownum: 0, heading: true, text:"Material"},
					{rownum: 0, heading: true, text:"Duration"}
				]},
				{row: true, items: [
					{rownum: 1, text:"Vegetable matter"},
					{rownum: 1, text:"1 day"}
				]},
				{row: true, items: [
					{rownum: 2, text:"Stone or crystal"},
					{rownum: 2, text:"12 hours"}
				]},
				{row: true, items: [
					{rownum: 3, text:"Precious metals"},
					{rownum: 3, text:"1 hour"}
				]},
				{row: true, items: [
					{rownum: 4, text:"Gems"},
					{rownum: 4, text:"10 minutes"}
				]},
				{row: true, items: [
					{rownum: 5, text:"Adamantine"},
					{rownum: 5, text:"1 minute"}
				]}
			]},
			{par: true, type: "par", text: "Using any material created by this spell as another spell&rsquo;s material component causes that spell to fail."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 6<sup>th</sup> level or higher, the cube increases by 5 feet for each slot level above 5<sup>th</sup>"}
		]},
	};

	return spell;
}