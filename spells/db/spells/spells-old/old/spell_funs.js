
function sort_spells(spell_obj_list){
	spell_obj_list.sort(function(a, b){
		if (a.level != b.level) return a.level - b.level;
		return a.name.localeCompare(b.name);
	});
}