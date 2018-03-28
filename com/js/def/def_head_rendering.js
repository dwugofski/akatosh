
var sidenavon = true;

function decodemedia(){
	switch($('#media_ident').css('list-style-type')){
		case 'disc':
			return "print";
		default:
			return "screen";
	}
}

function scrollnav() {
	var vwh = $(window).height();
	var scrolled = $(window).scrollTop();
	var headh = $('#heading').height();
	var navh = $('#navbar').height();
	var sidedrop = navh+headh - scrolled;
	
	if (decodemedia().localeCompare("screen")==0){
		if (sidedrop > navh) $('#sidenav').css("top", sidedrop);
		else $('#sidenav').css("top", navh);
		
		if (scrolled > headh) {
			$('#navbar').css("position", "fixed");
			$('#navbar').css("top", 0);
			$('#content').css("margin-top", navh+'px');
			$('#sidenav').css("max-height", vwh-navh);
		}
		if (scrolled < headh) {
			$('#navbar').css("position", "relative");
			$('#content').css("margin-top", 0);
			$('#sidenav').css("max-height", vwh-headh-navh+scrolled);
		}
	}
}

window.print = function() {
  scrollnav();
  // do stuff
  _print();
}

function ensurewidth() {
	var vpw = $(window).width();
	if (vpw < 1000 || !sidenavon) {
		$('#sidenav').hide();
		//$('#content').css('margin-left', 0);
	}
	else if(sidenavon){
		$('#sidenav').show();
		//$('#content').css('margin-left', $('#sidenav').outerWidth());
	}
	
	/*var twidth=0;
	var links = $("#navbar .links .link");
	$.each(links, function(index, link){
		var iwidth = $(link).width();
		if (vpw < twidth + iwidth + 30 && index != 0) {
			$(link).css('display', 'none');
			return false;
		}
		$(link).css('display', 'inline-block');
		twidth = twidth + iwidth + 30;
	});*/
}

$(document).ready(function() {
	
	$(window).scroll(scrollnav);
	$(window).resize(ensurewidth);
	scrollnav();
	ensurewidth();
	changeSidebar();
});

function changeSidebar(){
	var cnt_h = $('#content').height();
	$('#content #sidebar').height(cnt_h - 5);
}