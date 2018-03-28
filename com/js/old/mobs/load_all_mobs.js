
$(document).ready(function() {
	
	var promises = loadmobs(all_mob_shorts);
	
	$.when.apply($, promises).done(function(){
		ordermobs();
		listmobs(all_mob_names);
	});
});