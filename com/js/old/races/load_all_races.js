
$(document).ready(function() {
	
	var race_template = rendertemplate('#race_template');
	var promises = loaddynobjs(all_race_shorts, all_race_names, all_races, race_template, races_path);
	
	$.when.apply($, promises).done(function(){
		orderdynobjs(all_race_names, all_races);
		for (i = 0; i < all_races.length; i += 2)
			all_races[i].left = true;
		listdynobjs(all_race_names, all_races, 'Races of Tamriel', '#races', '.raceblock', race_template, 3);
	});
});