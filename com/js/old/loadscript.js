
jQuery.loadScript = function (url, callback) {
	jQuery.ajax({
		url: url,
		dataType: 'script',
		success: callback,
		async: true
	});
}

function loadMob (pathToMobs, mob, mobEl, template) {
	jQuery.ajax({
		url: pathToMobs + mob + ".js",
		dataType: 'script',
		async: true,
		success: function() {
			var mobHTML = Mustache.render(template, window[mob]());
			$(mobEl).html(mobHTML);
			changeSidebar();
		}
	});
}