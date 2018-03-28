
function load_spells(spells, path_to_spells) {
	
	if (spells == "") {
		spells = [
			"aid",
			"alarm",
			"alterself",
			"armsofhadar",
			"augury",
			"bane",
			"bless",
			"blindnessdeafness",
			"burninghands",
			"calmemotions",
			"chilltouch",
			"chromaticorb",
			"cloudofdaggers",
			"colorspray",
			"command",
			"conductivebolt",
			"conductiveward",
			"continualflame",
			"createordestroywater",
			"curewounds",
			"dancinglights",
			"detectevilandgood",
			"detectmagic",
			"detectpoisonanddisease",
			"divinefavor",
			//"enhanceability",
			"findtraps",
			"flamingsphere",
			"gentlerepose",
			"hellishrebuke",
			"hex",
			"holdperson",
			"falselife",
			"faeriefire",
			"featherfall",
			"firebolt",
			"fogcloud",
			"guidingbolt",
			"healingword",
			"inflictwounds",
			"lesserrestoration",
			"light",
			"locateobject",
			"magearmor",
			"magicmissile",
			"melfsacidarrow",
			"mending",
			"phantasmalforce",
			"poisonspray",
			"prayerofhealing",
			"prestidigitation",
			"protectionfromevilandgood",
			"protectionfrompoison",
			"purifyfoodanddrink",
			"rayofsickness",
			"sacredflame",
			"sanctuary",
			"scorchingray",
			"shatter",
			"shield",
			"shieldoffaith",
			"silence",
			"sparethedying",
			"spiritualweapon",
			"summonlesserdaedra",
			"thunderwave",
			"truestrike",
			"wardingbond",
			"web",
			"witchbolt",
			"zoneoftruth"
		];
	}
	
	spells.forEach(function(item, index) {
		var script = document.createElement("script");
		script.type = "text/javascript";
		script.src = path_to_spells + item + ".js";
		document.getElementsByTagName("head")[0].appendChild(script);
	});
	
	return spells;
	
}