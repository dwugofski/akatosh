<!DOCTYPE html>
<html>
<head>
	<title>D&amp;D Spells</title>
	<link rel="stylesheet" type="text/css" href="../com/css/spell.css"/>
	<link rel="stylesheet" type="text/css" href="../com/css/char.css"/>
	<link rel="stylesheet" type="text/css" href="../com/css/dice.css"/>
	<link rel="stylesheet" type="text/css" href="../com/css/screen.css"/>
	<link rel="stylesheet" type="text/css" href="../com/css/print.css" media="print"/>
	<script type="text/javascript" src="../com/js/mustache.js"></script>
	<script type="text/javascript" src="../com/js/jquery.js"></script>
	<script type="text/javascript" src="spell_funs.js"></script>
<?php
	foreach (glob ( "spells/*.js" ) as $filename) {
		echo "\t<script type=\"text/javascript\" src=\"$filename\"></script>\n";
	}
	?>
	<script type="text/javascript">	
		var spell_list = [
			<?php
			$prefix = "";
			foreach (glob ( "spells/*.js" ) as $filename) {
				echo $prefix . '"' . basename($filename, ".js") . '"';
				$prefix = ",\n\t\t\t";
			}
			echo "\n";
			?>
		];
		//var spell_list = load_spells("", "spells/");
		
		window.onload = function(){
			console.log("running");
			var spell_template = $('#spell_template').html();
			Mustache.parse(spell_template);
			var rendertext = "";
			
			var spell_obj_list = [];
			$.each(spell_list, function(index, spell){
				spell_obj_list.push(window[spell]());
			});
			sort_spells(spell_obj_list);
			
			$.each(spell_obj_list, function(index, spell){
				var rendered = Mustache.render(spell_template, spell);
				rendertext = rendertext + rendered;
			});
			$("#spells").html(rendertext);
			
			
			
			// Generate card for a specific spell
			/* $.post("load_spell.php", {name: "divineword"}, function(data){
				$('#spells').html(data);
				console.log(data);
			}); */
			
			// Generate cards for all spells
			/*$.post("load_spell.php", {name: "all"}, function(data){
				$('#spells').html(data);
				console.log(data);
			});*/
			
			// Generate list of all spells
			/*$.ajax({url: "list_spells.php", success: function(result){
				var spells = result.split(",");
				if (spells[0] != "!!!") {
					spells.forEach(function(item, index){
						$('#spells').append(item + "<br/>");
					});
				} else $('#spells').append(spells[1] + "<br/>");
			}});*/
			
			//Test space
			/*var obj = JSON.stringify({foo: true, bar: "Hello World!"});
			$.post("test.php", {str: "Hello Wayne's World!"}, function(result){
				console.log(result);
			});*/
			
			
		};
	</script>
</head>
<body>

<?php
include "spell_template.php";
?>

<div id="content">
<div id="spells"></div>
</div>

</body>