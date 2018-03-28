


function fillSidenav(startel) {
	if (startel === undefined) startel = $('#main');
	var hs = $(startel).find('h1, h2, h3');
	var h1i = 0;
	var h2i = 0;
	var h3i = 0;
	var last_h1_reflink = container_reflink;
	var last_h3_reflink = container_reflink;
	var last_h3_reflink = container_reflink;
	$.each(hs, function(hi, h){
		switch ($(h).prop("tagName")) {
			case "H1":
				h1i = h1i + 1;
				var h1txt = $(h).text();
				var h1id = "section "+h1i;
				var $h1anc = $("<a>", {id: h1id, class: "anchor"});
				$(h).append($h1anc);
				last_h1_reflink = container_reflink.add_element(h1txt, "#"+h1id, 1);
				last_h2_reflink = last_h1_reflink;
				last_h3_reflink = last_h1_reflink;
				break;
			case "H2":
				h2i = h2i + 1;
				var h2txt = $(h).text();
				var h2id = "section "+h1i+"_"+h2i;
				var $h2anc = $("<a>", {id: h2id, class: "anchor"});
				$(h).append($h2anc);
				last_h2_reflink = last_h1_reflink.add_element(h2txt, "#"+h2id, 2);
				last_h3_reflink = last_h2_reflink;
				break;
			case "H3":
				h3i = h3i + 1;
				var h3txt = $(h).text();
				var h3id = "section "+h1i+"_"+h2i+"_"+h3i;
				var $h3anc = $("<a>", {id: h3id, class: "anchor"});
				$(h).append($h3anc);
				last_h3_reflink = last_h2_reflink.add_element(h3txt, "#"+h3id, 3);
				break;
		}
	});
}
/*
$(document).ready(function() { fillSidenav(); });*/