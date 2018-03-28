
$(document).ready(function() {
	
	var promises = loadspells(all_spell_shorts);
	
	$.when.apply($, promises).done(function(){
		orderspells();
		listspells(all_spell_names);
	});
});