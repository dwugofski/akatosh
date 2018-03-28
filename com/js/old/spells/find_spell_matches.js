

function findspellmatches(qname){
	var name_list=[];
	var regexp = new RegExp('^'+qname+'.*', "gi");
	$.each(all_spell_names, function(index, name){
		if (name.match(regexp)) name_list.push(name);
	});
	
	return name_list;
}

$(document).ready(function() {
	
	$('#spellsearch')[0].oninput = function(){
		var matches = findspellmatches($('#spellsearch').val());
		if (matches.length > 0){
			reloadspells(matches);
		}
	};
});