
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

function Reflink(new_element, new_level) {
	this.element = new_element;
	this.level = new_level;
	this.reflinks = [];
}

Reflink.prototype.add_element = function(new_text, new_url, sub_level){
	if(sub_level === undefined) sub_level = this.level + 1;
	var new_element = $('<a/>', {
		href: new_url,
		text: new_text
	}).get(0);
	if (!$(this.element).hasClass("parent")) $(this.element).addClass("parent"); 
	$(new_element).addClass("refh"+sub_level);
	$(new_element).addClass("last");
	$(new_element).addClass("end");
	if(this.reflinks.length == 0) $(new_element).addClass("first");
	else if (this.reflinks[this.reflinks.length-1].reflinks.length != 0) $(new_element).addClass("restart");
	
	var new_reflink = new Reflink(new_element, sub_level);
	
	if(this.reflinks.length > 0) $(this.last_reflink.element).removeClass("last");
	if(this.reflinks.length == 0) this.first_reflink = new_reflink;
	this.last_reflink = new_reflink;
	this.reflinks.push(new_reflink);
	$("#sidenav .container").append(new_element);

	if (container_reflink.end !== undefined) $(container_reflink.end.element).removeClass("end");
	container_reflink.end = new_reflink;
	
	return new_reflink;
}

var container_reflink = new Reflink(undefined, $("#sidenav .container").get(0), 0);





