
var sstate;

$(window).click(function(event) {
	if($(event.target).closest('#homelink').length) {
		togglesidenav();
	} else if(!$(event.target).closest('#sidenav').length){
		if (sstate != 0) hidesidenav();
	}
});

function hidesidenav(){
	sstate = 0;
	$('#sidenav').css({'left': ''});
}

function showsidenav(){
	sstate = 1;
	$('#sidenav').animate({'left': 0}, 200, function(){});
}

function togglesidenav(){
	if (sstate == 0) showsidenav();
	else hidesidenav();
}

$(document).ready(function() {
	hidesidenav();
});

function Reflink(parent, new_element, new_lblock, new_level) {
	this.parent = parent;
	this.element = new_element;
	if (new_lblock !== undefined) this.lblock = new_lblock;
	else this.lblock = $('<a>', {class: 'dummy'});
	this.level = new_level;
	this.reflinks = [];
}

Reflink.prototype.add_element = function(new_text, new_url, sub_level){
	if (this.element === undefined) this.element = $("#sidenav .container");

	if(sub_level === undefined) sub_level = this.level + 1;
	var new_element = $('<div/>');
	var new_lblock = $('<a/>', {
		href: new_url,
		text: new_text
	});

	if (!$(this.lblock).hasClass("parent")) $(this.lblock).addClass("parent"); 
	$(new_lblock).addClass("lv"+sub_level);
	$(new_lblock).addClass("last");
	if(this.reflinks.length == 0) $(new_lblock).addClass("first");
	else if (this.reflinks[this.reflinks.length-1].reflinks.length != 0) $(new_lblock).addClass("restart"); // Restart if coming in after a list
	else if (this.reflinks[this.reflinks.length-1].level > sub_level) $(new_lblock).addClass("restart"); // Also restart if previous reflink was less primative

	new_element.append(new_lblock);
	var new_reflink = new Reflink(this, new_element, new_lblock, sub_level);

	if(this.reflinks.length > 0) $(this.last_reflink.lblock).removeClass("last");
	if(this.reflinks.length == 0) this.first_reflink = new_reflink;
	this.last_reflink = new_reflink;
	this.reflinks.push(new_reflink);

	var pnode = this;
	var isend = true;
	while (pnode !== container_reflink) {
		if ($(pnode.lblock).hasClass('last') == false) {
			isend = false;
			break;
		}
		pnode = pnode.parent;
	}

	if (isend == true){
		if (container_reflink.end !== undefined) {
			container_reflink.end.lblock.removeClass("end");
		}
		new_reflink.lblock.addClass("end");
		container_reflink.end = new_reflink;
	}
	
	$(this.element).append(new_element);
	return new_reflink;
}

var container_reflink = new Reflink(undefined, undefined, undefined, 0);





