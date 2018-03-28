

var spelltemplate;
var all_spell_names=[];	// list of all available spell names (not necessarily all spell names in database)
var all_spells=[];	// list of all available spells

// Run AJAX requests to get the scripts that let us access the spell objects
function loadspells(spell_short_names) {
	spelltemplate = $('#spell_template').html();	// Load the template
	Mustache.parse(spelltemplate);					// Parse it for easy access (apparently)
	
	// Go through all the short names and get the scripts from their files
	// Create promises array for AJAX requests
	var promises = spell_short_names.map(function(short_name, index){
		return $.ajax({
			url: spells_path + short_name + ".js",
			dataType: 'script',
			async: true,
			success: function() {
				var spell = window[short_name]();	// The short name identifies the functions and ids 
				var name = spell.name;				// While the name is used for ordering
				pushspell(name, spell);				// Store everything into arrays
			}
		});
	});
	
	return promises;
}

// Add spells to arrays
function pushspell(name, spell) {
	if ($.inArray(name, all_spell_names)<0){	// Push elements into arrays, unless already there
		all_spell_names.push(name);
		all_spells.push(spell);
	}
}

// function to sort both names and spell objects
function orderspells() {
	var spellcopy = all_spell_names.slice(0);	// Create an array copy for reference during ordering
	all_spell_names.sort(function(a,b){return comparespells(all_spells[spellcopy.indexOf(a)], all_spells[spellcopy.indexOf(b)] );});
	all_spells.sort(function(a,b){return all_spell_names.indexOf(a.name) < all_spell_names.indexOf(b.name) ? -1 : 1;});
}

// Render the spells on a names list
function listspells(spell_names) {
	// Add links to sidenav... currently obsolete
	var spells_reflink = container_reflink.add_element("Spells", "#spellbox"); 
	$.each(spell_names, function(index, name){
		var sname = $('<textarea />').html(name).text().toLowerCase().replace(/\W+/g, "");
		spells_reflink.add_element(name, "#"+sname+"_anc", 3);
	});
	
	// Go through the desired spell names and create/render elements
	$.each(spell_names, function(index, name){
		var $spellEl = spellelement(name, all_spells[index]);
		addspell($spellEl);	// add spell to document
	});
	
	changeSidebar();	// Change the sidebar length to account for the increase in elements
	
	if(all_spells.length == 0) $('#spellbox').css('display', 'none'); // Hide the spell box if it's empty
}

// Remove rendered spells that aren't on a list, and add the spells that aren't rendered 
function reloadspells(spell_names) {
	// Map long names to short names
	var snames = spell_names.map(function(name, index){
		return $('<textarea />').html(name).text().toLowerCase().replace(/\W+/g, "");
	});
	
	// iterate through the existing spell elements and remove any not on the list
	$.each($('#spellbox spell'), function(index, spell){
		var sname = $(spell).attr('id');	// get the short name from the iterated spell 
		if ($.inArray(sname, snames) < 0){	// check if name of iterated spell is in desired spell list
			remspell(spell);
		} else {
			spell_names.splice(snames.indexOf(sname), 1);	// eliminate redundancy by removing any found spell from the desired list
			snames.splice(snames.indexOf(sname), 1);
		} 
	});
	
	// iterate through the remaining names in the list, and add them to the box
	$.each(spell_names, function(index, name){
		if (all_spell_names.indexOf(name) < 0) return true;
		var spell = all_spells[all_spell_names.indexOf(name)];
		var insertel = undefined;
		$.each($('#spellbox spell'), function(bindex, bblock){	// iterate through the spells in the box to find where to put the new spell
			var bname = $(bblock).find('.spellidname').text();	// get the long name of the spell for indexing (long names give short names, but not the other way around)
			if(all_spell_names.indexOf(name) < all_spell_names.indexOf(bname)) {
				insertel = bblock;
				return false;
			}
		});
		
		var $spellEl = spellelement(name, spell);
		addspell($spellEl, insertel);	// add the spell to the proper location
	});
}

// function to add spell element to document
function addspell(spellel, inb4){
	if(inb4 === undefined) $('#spellbox').append(spellel);	// put spell before a certain specified element
	else $(inb4).before(spellel);	// if no element specified, tack onto the end
	
	$(spellel).find('.spellblock').css('opacity', 0);	// set opacity to 0 to start
	$(spellel).find('.spellblock').fadeTo(300, 1, function(){});	// fade the element in
}

// function to remove spell element from document
function remspell(spellel){
	$(spellel).find('.spellblock').fadeOut('fast', function(){	// fade out spell
		$(spellel).remove();	// remove spell after it's been faded out
	});
}

// generate an html element object for a spell
function spellelement(name, spell) {
	var sname = $('<textarea />').html(name).text().toLowerCase().replace(/\W+/g, "");	// convert the iterated name to a short name
	var $spellEl = $("<spell>", {id: sname});	// create a new spell element for the spell
	var spellHTML = Mustache.render(spelltemplate, spell);	// render the HTML code
	$spellEl.html("<a class=\"anchor\" id=\""+sname+"_anc\"></a>"+spellHTML);	// add an anchor
	
	return $spellEl;
}

// comparison function for spells
function comparespells(a, b){
	if(a.level == b.level) return a.name.localeCompare(b.name);	// if levels equal, do name comparison
	else if (a.level > b.level) return 1;	// else return the higher level
	else return -1;
}
