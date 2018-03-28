

$(document).ready(function() {
	var mobs = $('mob');
	$.each(mobs, function(index, mob) {
		var mobId = $(mob).attr('id');
		mobId = mobId.toLowerCase();
		mobId = mobId.replace(/[^a-z]/g, '');
		
		loadMob("../../creatures/db/mobs/", mobId, mob, $('#mob_template').html());
	});
	changeSidebar();
});