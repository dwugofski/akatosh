function augury() {
	var spell = {
		name: "Augury",
		school: "divination",
		type: "2nd-level Divination Ritual",
		level: "2",
		properties: {attributes: [
			{ano: true, type: "ano", name: "Level", text: "2"},
			{ano: true, type: "ano", name: "Casting Time", text: "1 minute"},
			{ano: true, type: "ano", name: "Range", text: "Self"},
			{ano: true, type: "ano", name: "Component", text: "V, S, M (specially marked sticks, bones, or similar tokens worth at least 25 gp)"},
			{ano: true, type: "ano", name: "Duration", text: "Instantaneous"}
		]},
		description: {attributes: [
			{par: true, type: "par", text: "By casting gem-inlaid sticks, rolling dragon bones, laying out ornate cards, or employing some other divining tool, you receive an omen from an otherworldly entity about the results of a specific course of action that you plan to take within the next 30 minutes. The DM chooses from the following possible omens:"},
			{lst: true, type: "lst", bulleted: true, items: [
				{text: "<i>Weal</i>, for good results"},
				{text: "<i>Woe</i>, for bad results"},
				{text: "<i>Weal and Woe</i>, for both good and bad results"},
				{text: "<i>Nothing</i>, for results that aren&rsquo;t especially good or bad"}
			]},
			{par: true, type: "par", text: "The spell doesn&rsquo;t take into account any possible circumstances that might change the outcome, such as the casting of additional spells or the loss or gain of a companion."},
			{par: true, type: "par", text: "If you cast the spell two or more times before completing your next long rest, there is a cumulative 25 percent chance for each casting after the first that you will get a random reading. The DM makes this roll in secret."}
		]},
	};

	return spell;
}