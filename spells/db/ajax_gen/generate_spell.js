
function display_spell_block(sname, path) {
	$.post(path+"generate_spell.php", {'spell': sname}, function(data){
		var response = JSON.parse(data);
		if (response.error != false) console.log(response.error);
		else {
			var $viewer = $('#spell_viewer');
			$viewer.html(response.html);
			$viewer.css({'display': "block"});
			$('#spell_mask').css({'display': "block"});
		}
	});
}

$(document).ready(function(){
	$('#spell_mask').click(function(){
		$('#spell_viewer').css({'display': "none"});
		$('#spell_mask').css({'display': "none"});
	});
});