<!DOCTYPE html>
<html>
<head>
	<title>D&amp;D Insert Spell</title>
	<link rel="stylesheet" type="text/css" href="../../com/css/spell.css">
	<link rel="stylesheet" type="text/css" href="../../com/css/char.css">
	<link rel="stylesheet" type="text/css" href="../../com/css/dice.css">
	<link rel="stylesheet" type="text/css" href="../../com/css/body.css">
	<script type="text/javascript" src="../../com/js/mustache.js"></script>
	<script type="text/javascript" src="../../com/js/jquery.js"></script>
	<script type="text/javascript" src="../../com/js/jquery.form.js"></script>
	<script type="text/javascript">
		var spells = [
			"creation",
			"divineword",
			"mordenkainenssword"
		];
		
		spells.forEach(function(item, index) {
			var script = document.createElement("script");
			script.type = "text/javascript";
			script.src = "list/" + item + ".js";
			document.getElementsByTagName("head")[0].appendChild(script);
		});
		
		window.onload = function(){
			spells.forEach(function(spellname, index){
				var spell = window[spellname]();
				var spell_data = JSON.stringify(spell);
				$.post("insert_spell.php", {spell: spell_data}, function(result){
					console.log(result);
				});
			});
		};
	</script>
</head>
<body>

<div id="spells"></div>

</body>