function createordestroywater() {
	var spell = {
		name: "Create or Destroy Water",
		school: "transmutation",
		type: "1st-level Transmutation Spell",
		level: "1",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "1"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 action"},
			{ano: true, type: "ano", name: "Range", text: "30 feet"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (a drop of water if creating water or a few grains of sand if destroying it)"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "You either create or destroy water."},
			{par: true, type: "par", text: "<b>Create Water.</b> You create up to 10 gallons of clean water within range in an open container. Alternatively, the water falls as rain in a 30-foot cube within range, extinguishing exposed flames in the area."},
			{par: true, type: "par", text: "<b>Destroy Water.</b> You destroy up to 10 gallons of water in an open container within range. Alternatively, you destroy fog in a 30-foot cube within range."}
		]},
		higher: {attributes: [
			{par: true, type: "par", text: "When you cast this spell using a spell slot of 2nd level or higher, you create or destroy 10 additional gallons of water, or the size of the cube increases by 5 cubic feet, for each slot level above 1<sup>st</sup>."}
		]},
	};

	return spell;
}