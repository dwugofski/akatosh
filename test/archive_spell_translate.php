
<!DOCTYPE html>
<html>
<head>
<?php
	include "../spells/db/spell_db.php"; 
	function db_spell_cmp($a, $b){
		return strcmp($a['name'], $b['name']);
	}
?>
	<title>Splinters Test</title>
	<script type="text/javascript" src="../com/js/def/jquery.js"></script>
	<script type="text/javascript">
		// function update_holder(json) {
		// 	var parse = "$spell_db = [\n";
		// 	$.each(json, function(index, spell){
		// 		var prefix = ",\n\t";
		// 		if (index == 0) prefix = "\t";

		// 		var sname = spell.name.toLowerCase().replace(/\W+/g, "");
		// 		var line = prefix+"\'"+sname+"\'=> [";
		// 		line += "\'sname\'=> \""+sname+"\", \'name\'=> \""+spell.name+"\", \'level\'=> \""+spell.level+"\", \'school\'=> \""+spell.school;
		// 		line += "\", \'classes\'=> [\n";
		// 		var sub_prefix = "\t\t";
		// 		$.each(spell.classes, function(index, classname){
		// 			line += sub_prefix + "\"" + classname + "\"";
		// 			sub_prefix = ",\n\t\t"
		// 		})
		// 		line += "\n\t]]";
		// 		parse += line;
		// 	});
		// 	parse += "\n];"
		// 	$('#holder').text(parse);
		// }

		// $.getJSON("spells.json", function(json) {
		//     update_holder(json);
		// });
	</script>
</head>
<body>
	<div id="holder">
		<h1>Wizard Spells</h1>
<?php
	$levels = ["cantrip", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
	foreach ($levels as $level) {
		echo "<h2>Level ".$level."</h2>";

		$spells_at_level = [];
		foreach ($spell_db as $spell) {
			if ($spell['level'] == $level && in_array("wizard", $spell['classes'])) $spells_at_level[] = $spell;
		}
		usort($spells_at_level, "db_spell_cmp");

		foreach ($spells_at_level as $spell)
			echo "<p>".$spell['name']."</p>";
	}
	
?>
	</div>
</body>
</html>