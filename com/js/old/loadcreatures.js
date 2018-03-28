
function load_creatures(creatures, path_to_folder) {
	creatures.forEach(function(item, index) {
		var script = document.createElement("script");
		script.type = "text/javascript";
		script.src = path_to_folder + item + ".js";
		document.getElementsByTagName("head")[0].appendChild(script);
	});
}