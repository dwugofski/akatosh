

function loadmobinks(){
	
	var snames = [];
	$.each($('.moblink'), function(index, moblink){

		var sname = $(moblink).attr('id').replace('_link', '');
		if ($(moblink).hasClass('moblist') && window[sname] !== undefined) snames = snames.concat(window[sname]); 
		else snames.push(sname); 
	});
	
	return loadmobs(snames);
}

function rendermoblinks(){
	var promises = loadmobinks();
	$.when.apply($, promises).done(function(){
		if (all_mob_names.length > 0) {
			$('#creaturebox').css('display', 'block');
			listmobs(all_mob_names);
		}
	});
}