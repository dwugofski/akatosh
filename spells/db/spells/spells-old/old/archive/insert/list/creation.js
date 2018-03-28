 function creation() {
	
	var spell = {
		name: "Creation",
		school: "illusion",
		type: "5th-level Illusion Spell",
		level: 5,
		properties: {attributes: [
			{type: "ano", name: "Level", text: "5"},
			{type: "ano", name: "Casting Time", text: "1 minute"},
			{type: "ano", name: "Range", text: "30 feet"},
			{type: "ano", name: "Component", text: "V, S, M (a tiny piece of matter of the same type of the item you plan to create)"},
			{type: "ano", name: "Duration", text: "Special"}
		]},
		description: {attributes: [
			{type: "par", text:"You pull whisps of shadow material from the Shadowfell to create a nonliving object of vegetable matter within range: soft goods, rope, wood, or something similar. You can also use this spell to create mineral objects such as stone, crystal, or metal. The object created must be of a form and material you have seen before."},
			{type: "par", text: "The duration depends on the object&rsquo;s material. If the object is composed of multiple materials, use the shortest duration."},
			{type: "tab", items: [
				{rownum: 0, heading: true, text: "Material"},
				{rownum: 0, heading: true, text: "Duration"},
				{rownum: 1, text: "Vegetable matter"},
				{rownum: 1, text: "1 day"},
				{rownum: 2, text: "Stone or crystal"},
				{rownum: 2, text: "12 hours"},
				{rownum: 3, text: "Precious metals"},
				{rownum: 3, text: "1 hour"},
				{rownum: 4, text: "Gems"},
				{rownum: 4, text: "10 minutes"},
				{rownum: 5, text: "Adamantine"},
				{rownum: 5, text: "1 minute"}
			]},
			{type: "par", text:"Using any material created by this spell as another spell&rsquo;s material component causes that spell to fail."}
		]},
		higher: {attributes: [
			{type: "par", text: "When you cast this spell using a spell slot of 6<sup>th</sup> level or higher, the cube increases by 5 feet for each slot level above 5<sup>th</sup>"}
		]}
	};
	
	return spell;
}