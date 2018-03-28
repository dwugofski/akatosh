
var mobtemplate;
var all_mob_names = [];
var all_mobs = [];

function loadmobs(mob_short_names) {
	mobtemplate = $('#mob_template').html();
	Mustache.parse(mobtemplate);
	
	var promises = mob_short_names.map(function(short_name, index){
		return $.ajax({
			url: mobs_path + short_name + ".js",
			dataType: 'script',
			async: true,
			success: function() {
				var mob = window[short_name]();
				var name = mob.name;
				pushmob(name, mob);
			}
		});
	});
	
	return promises;
}

function pushmob(name, mob) {
	all_mob_names.push(name);
	all_mobs.push(mob);
}

function ordermobs(){
	all_mob_names.sort(function(a,b){return a.localeCompare(b);});
	all_mobs.sort(function(a,b){return all_mob_names.indexOf(a.name) < all_mob_names.indexOf(b.name) ? -1 : 1;});
}

function listmobs(mob_names) {
	
	var mobs_reflink = container_reflink.add_element("Mobs", "#creaturebox"); 
	$.each(mob_names, function(index, name){
		var sname = $('<textarea />').html(name).text().toLowerCase().replace(/\W+/g, "");
		mobs_reflink.add_element(name, "#"+sname+"_anc", 3);
	});
	
	$.each(mob_names, function(index, name){
		var $mobEl = mobelement(name, all_mobs[index]);
		addmob($mobEl);
	});
	
	changeSidebar();
}

function reloadmobs(mob_names){
	// Map long names to short names
	var snames = mob_names.map(function(name, index){
		return $('<textarea />').html(name).text().toLowerCase().replace(/\W+/g, "");
	});
	
	// iterate through the existing mob elements and remove any not on the list
	$.each($('#creaturebox mob'), function(index, mobel){
		var sname = $(mobel).attr('id');	// get the short name from the iterated mob 
		if ($.inArray(sname, snames) < 0){	// check if name of iterated mob is in desired mob list
			remmob(mobel);
		} else {
			mob_names.splice(snames.indexOf(sname), 1);	// eliminate redundancy by removing any found mob from the desired list
			snames.splice(snames.indexOf(sname), 1);
		} 
	});
	
	// iterate through the remaining names in the list, and add them to the box
	$.each(mob_names, function(index, name){
		if (all_mob_names.indexOf(name) < 0) return true;
		var mob = all_mobs[all_mob_names.indexOf(name)];
		var insertel = undefined;
		$.each($('#creaturebox mob'), function(bindex, bblock){	// iterate through the mobs in the box to find where to put the new spell
			var bname = $(bblock).find('.mobidname').text();	// get the long name of the mob for indexing (long names give short names, but not the other way around)
			if(all_mob_names.indexOf(name) < all_mob_names.indexOf(bname)) {
				insertel = bblock;
				return false;
			}
		});
		
		var $mobEl = mobelement(name, mob);
		addmob($mobEl, insertel);	// add the mob to the proper location
	});
}

function addmob(mobel, inb4){
	if(inb4 === undefined) $('#creaturebox').append(mobel);	// put mob before a certain specified element
	else $(inb4).before(mobel);	// if no element specified, tack onto the end
	
	$(mobel).find('.moblock').css('opacity', 0);	// set opacity to 0 to start
	$(mobel).find('.moblock').fadeTo(300, 1, function(){});	// fade the element in
}

//function to remove mob element from document
function remmob(mobel){
	$(mobel).find('.moblock').fadeOut('fast', function(){	// fade out mob
		$(mobel).remove();	// remove mob after it's been faded out
	});
}

function mobelement(name, mob){
	var sname = $('<textarea />').html(name).text().toLowerCase().replace(/\W+/g, "");
	var $mobEl = $("<mob>", {id: sname});
	var mobHTML = Mustache.render(mobtemplate, mob);
	$mobEl.html("<a class=\"anchor\" id=\""+sname+"_anc\"></a>"+mobHTML);
	return $mobEl;
}



