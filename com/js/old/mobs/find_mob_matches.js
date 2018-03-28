
function summoned_daedra(){ return ["scamp", "clannfear", "daedroth", "spiderdaedra"]; }
function dragon_cult(){ return ["dragoncultist", "dragoncultacolyte", "dragoncultthug", "dragoncultinfiltrator", "dragoncultfanatic", "dragoncultlietenant", "dragoncultritualist", "dragoncultchampion"]; }
function draugrs(){ return ["draugr", "restlessdraugr", "draugrwight", "draugrscourge", "draugroverlord", "draugrdeathlord"]; }

function findmobmatches(qname){
	var name_list=[];
	var regexp = new RegExp('^'+qname+'.*', "gi");
	$.each(all_mob_names, function(index, name){
		if (name.match(regexp)) name_list.push(name);
	});
	
	return name_list;
}

function findfaction(fname) {
	var snames = window[fname]();
	console.log(snames);
	var name_list = [];

	$.each(all_mob_names, function(index, name){
		sname = $('<textarea />').html(name).text().toLowerCase().replace(/\W+/g, "");
		if ($.inArray(sname, snames) > -1) name_list.push(name);
	});

	if (name_list.length > 0){
		reloadmobs(name_list);
	}
}

$(document).ready(function() {
	
	$('#mobsearch')[0].oninput = function(){
		var matches = findmobmatches($('#mobsearch').val());
		if (matches.length > 0){
			reloadmobs(matches);
		}
	};
});