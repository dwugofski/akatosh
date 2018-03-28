 function augury(template) {
	//Render the data into the template
	var rendered = Mustache.render(template, {
		name: "Augury",
		school: "Divination",
		blockclass: "divination",
		subtitle: "2nd-level Divination Ritual",
		cantrip: false,
		level: 2,
		properties: {props: [
			{name: "Level", value: "2"},
			{name: "Casting Time", value: "1 minute"},
			{name: "Range", value: "Self"},
			{name: "Component", value: "V, S, M (specially marked sticks, bones, or similar tokens worth at least 25 gp)"},
			{name: "Duration", value: "Instantaneous"}
		]},
		description: {props: [
			{p: true,  text:"By casting gem-inlaid sticks, rolling dragon bones, laying out ornate cards, or employing some other divining tool, you receive an omen from an otherworldly entity about the results of a specific course of action that you plan to take within the next 30 minutes. The DM chooses from the following possible omens:"},
			{list: true, dashed: true, items:[
				{text: "<i>Weal</i>, for good results"},
				{text: "<i>Woe</i>, for bad results"},
				{text: "<i>Weal and Woe</i>, for both good and bad results"},
				{text: "<i>Nothing</i>, for results that aren&rsquo;t especially good or bad"}
			]},
			{p: true,  text:"The spell doesn&rsquo;t take into account any possible circumstances that might change the outcome, such as the casting of additional spells or the loss or gain of a companion."},
			{p: true,  text:"If you cast the spell two or more times before completing your next long rest, there is a cumulative 25 percent chance for each casting after the first that you will get a random reading. The DM makes this roll in secret."}
		]}
	});
	
	return rendered;
}