<!DOCTYPE html>
<html>
<head>
	<title>D&amp;D Creatures</title>
	<link rel="stylesheet" type="text/css" href="../com/css/mob.css"/>
	<link rel="stylesheet" type="text/css" href="../com/css/char.css"/>
	<link rel="stylesheet" type="text/css" href="../com/css/dice.css"/>
	<link rel="stylesheet" type="text/css" href="../com/css/screen.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="../com/css/print.css" media="print"/>
	<script type="text/javascript" src="../com/js/mustache.js"></script>
	<script type="text/javascript" src="../com/js/jquery.js"></script>
	<script type="text/javascript" src="mob_funs.js"></script>
<?php
	foreach (glob ( "mobs/*.js" ) as $filename) {
		echo "\t<script type=\"text/javascript\" src=\"$filename\"></script>\n";
	}
	?>
	<script type="text/javascript">	
		var mob_list = [
			<?php
			$prefix = "";
			foreach (glob ( "mobs/*.js" ) as $filename) {
				echo $prefix . '"' . basename($filename, ".js") . '"';
				$prefix = ",\n\t\t\t";
			}
			echo "\n";
			?>
		];
		
		window.onload = function(){
			mob_list = summoned_daedra();
			
			console.log("running");
			var mob_template = $('#mob_template').html();
			Mustache.parse(mob_template);
			var rendertext = "";
			
			var mob_obj_list = [];
			$.each(mob_list, function(index, mob){
				mob_obj_list.push(window[mob]());
			});
			sort_mobs(mob_obj_list);
			
			$.each(mob_obj_list, function(index, mob){
				var rendered = Mustache.render(mob_template, mob);
				rendertext = rendertext + rendered;
			});
			$("#mobs").html(rendertext);
		};
	</script>
</head>
<body>

<?php
include "mob_template.php";
?>

<div id="content">
<div id="mobs"></div>
</div>

</body>