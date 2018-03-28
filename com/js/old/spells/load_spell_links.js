

function loadspelllinks(){
	var snames = $.makeArray($('.spelllink')).map(function(spelllink, index){
		return $(spelllink).attr('id').replace('_link', '');
	});
	
	return loadspells($.makeArray(snames));
}