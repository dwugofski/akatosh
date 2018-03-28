 function createordestroywater(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Create or Destroy Water",
		school: "Transmutation",
		blockclass: "transmutation",
		subtitle: "1st-level Transmutation Spell",
		cantrip: false,
		level: 1,
		properties: {props: [
			{name: "Level", value: "1"},
			{name: "Casting Time", value: "1 action"},
			{name: "Range", value: "30 feet"},
			{name: "Component", value: "V, S, M (a drop of water if creating water or a few grains of sand if destroying it)"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"You either create or destroy water."},
			{p: true, text: "<b>Create Water.</b> You create up to 10 gallons of clean water within range in an open container. Alternatively, the water falls as rain in a 30-foot cube within range, extinguishing exposed flames in the area."},
			{p: true, text: "<b>Destroy Water.</b> You destroy up to 10 gallons of water in an open container within range. Alternatively, you destroy fog in a 30-foot cube within range."}
		]},
		higher: {props: [
			{p:true, text: "When you cast this spell using a spell slot of 2nd level or higher, you create or destroy 10 additional gallons of water, or the size of the cube increases by 5 cubic feet, for each slot level above 1<sup>st</sup>."}
		]}
	});
	
	return rendered;
}