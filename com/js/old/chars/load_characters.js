
var chartemplate;
var char_names = [];
var chars = [];

$(document).ready(function() {
	chartemplate = $('#char_template').html();
	Mustache.parse(chartemplate);
	
	var char_shorts=[];
	var character_blocks = $('character');
	$.each(character_blocks, function(index, character_block){
		char_shorts.push($(character_block).attr('id'));
	});

	var promises = char_shorts.map(function(short_name, index){
		return $.ajax({
			url: chars_path + short_name + ".js",
			dataType: 'script',
			async: true,
			success: function() {
				var char = window[short_name]();
				var name = char.name;
				pushchar(name, char);
			}
		});
	});
	
	$.when.apply($, promises).done(function(){
		render_chars();
	});
});

function pushchar(name, char){
	char_names.push(name);
	chars.push(char);
}

function render_chars() {
	char_names.sort(function(a,b){return a.localeCompare(b);});
	chars.sort(function(a,b){return char_names.indexOf(a.name) < char_names.indexOf(b.name) ? -1 : 1;});
	
	$.each(char_names, function(index, name){
		var sname = $('<textarea />').html(name).text().toLowerCase().replace(/\W+/g, "");
		var $charEl = $('#'+sname);
		var charHTML = Mustache.render(chartemplate, chars[index]);
		$charEl.html("<a class=\"anchor\" id=\""+name+"_anc\"></a>"+charHTML);
	});
	
	var promises=loadspelllinks();
	$.when.apply($, promises).done(function(){
		if (all_spell_names.length > 0) {
			$('#spellbox').css('display', 'block');
			orderspells();
			listspells(all_spell_names);
		}
	});
	
	changeSidebar();
}