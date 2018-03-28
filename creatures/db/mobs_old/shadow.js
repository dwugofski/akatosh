
function shadow() {
	var creature = {
		name: "Shadow",
		size: "Medium",
		type: "undead",
		alignment: "Chaotic Evil",
		top_props: {attributes: [
			{ano: true, type: "ano", name: "Armor Class", text: "12 (unarmored)"},
			{ano: true, type: "ano", name: "Hit Points", text: "16 (3d8 + 3)"},
			{ano: true, type: "ano", name: "Speed", text: "40ft"}
		]},
		STR: "6 (-2)",
		DEX: "14 (+2)",
		CON: "13 (+1)",
		INT: "6 (-2)",
		WIS: "10 (0)",
		CHA: "8 (-1)",
		bot_props: {attributes: [
			{ano: true, type: "ano", name: "Skills", text: "Stealth +4 (+6 in dim light or darkness)"},
			{ano: true, type: "ano", name: "Damage Vulnerabilities", text: "radiant"},
			{ano: true, type: "ano", name: "Damage Resistances", text: "acid, cold, fire, lightning, thunder; bludgeoning, piercing, and slashing from nonmagical attacks"},
			{ano: true, type: "ano", name: "Damage Immunities", text: "necrotic, poison"},
			{ano: true, type: "ano", name: "Condition Immunities", text: "exhaustion, frightened, grappled, paralyzed, petrified, poisoned, prone, restrained"},
			{ano: true, type: "ano", name: "Senses", text: "Darkvision 60ft., passive Perception 10"},
			{ano: true, type: "ano", name: "Languages", text: "&mdash;"},
			{ano: true, type: "ano", name: "Challenge", text: "1/2 (100 XP)"}
		]},
		feats: {attributes: [
			{ano: true, type: "ano", name: "Amorphous", text: "The shadow can move through a space as narrow as 1 inch wide without squeezing."},
			{ano: true, type: "ano", name: "Shadow Stealth", text: "When in dim light or darkness, the shadow can take the Hide action as a bonus action."},
			{ano: true, type: "ano", name: "Sunlight Weakness", text: "While in sunlight, the shadow has disadvantage on attack rolls, ability checks, and saving throws."}
		]},
		actions: {attributes: [
			{ano: true, type: "ano", name: "Strength Drain", text: "<i>Melee Weapon Attack</i> +4 to hit, reach 5 ft., one target. Hit: <b class=\"die dmg bludge\">4 (1d6 + 1)</b> necrotic damage, and the target's <b class=\"die save str\">STR</b> score is reduced by <b class=\"die save str\">1d4</b>. The target dies if this reduces its <b class=\"die save str\">STR</b> to 0. Otherwise, the reduction lasts until the target finishes a short or long rest."},
			{par: true, type: "par", text: "If a non-evil humanoid dies from this attack, a new shadow rises from the corpse <b class=\"die\">1d4</b> hours later."}
		]}
	};
	
	return creature;
}