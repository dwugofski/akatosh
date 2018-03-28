<?php
	$conditions = "";
	if (isset($_POST['school']) || isset($_POST['lvl']) || isset($_POST['class'])) {
		if (!empty($_POST['school']) || !empty($_POST['lvl']) || !empty($_POST['class'])) $conditions .= "WHERE ";
		if (isset($_POST['school'])) if (!empty($_POST['school'])) {
			$conditions .= "(";
			$prefix = "";
			foreach ($_POST['school'] as $school) {
				$conditions .= $prefix."school = \"".$school."\"";
				$prefix = " OR ";
			}
			$conditions .= ") ";
			if (!empty($_POST['lvl']) || !empty($_POST['class'])) $conditions .= "AND ";
		}
		if (isset($_POST['lvl'])) if (!empty($_POST['lvl'])) {
			$newlevels = [];
			foreach ($levels as $lvlshort => $lvl) {
				if (in_array($lvlshort, $_POST['lvl'])) $newlevels[$lvlshort] = $lvl;
			}
			$levels = $newlevels;

			$conditions .= "(";
			$prefix = "";
			foreach ($_POST['lvl'] as $lvl) {
				$conditions .= $prefix."level = \"".$lvl."\"";
				$prefix = " OR ";
			}
			$conditions .= ") ";
			if (!empty($_POST['class'])) $conditions .= "AND ";
		}
		if (isset($_POST['class'])) if (!empty($_POST['class'])) {
			$newclasses = [];
			foreach ($spellcasters as $class) {
				if (in_array(strtolower($class), $_POST['class'])) $newclasses[] = $class;
			}
			$spellcasters = $newclasses;

			$conditions .= "(";
			$prefix = "";
			foreach ($_POST['class'] as $class) {
				$conditions .= $prefix."$class = TRUE";
				$prefix = " OR ";
			}
			$conditions .= ") ";
		}
	}

	$sql = "SELECT * FROM spell_basics ".$conditions."ORDER BY level ASC, sname ASC";
	$all_spells = query_rows('dnd_spells', $sql);

	$jscode = "\t\t\t\t<script type=\"text/javascript\">\n";
	$element = "";

	foreach ($spellcasters as $classname) {
		$spells = array_filter($all_spells, function($spell) use ($classname) {
			return $spell[strtolower($classname)];
		});
		if (empty($spells) === TRUE) continue;

		$jscode .= "\t\t\t\t\t".strtolower($classname)."_reflink = container_reflink.add_element(\"$classname Spells\", \"#".strtolower($classname)."_spells\", 1);\n";

		$element .= "\t\t\t\t<h2>$classname Spells</h2>\n";
		$element .= "\t\t\t\t<div class=\"spellgroup\"><a class=\"anchor\" id=\"".strtolower($classname)."_spells\"></a>\n";

		foreach ($levels as $key => $value) {
			$levspells = array_filter($spells, function($spell) use ($key) {
				return spell_filter_level($spell, $key);
			});

			if (empty($levspells)) continue;

			$jscode .= "\t\t\t\t\t\t".strtolower($classname)."_reflink.add_element(\"$value\", \"#".strtolower($classname)."_lvl$key\", 3);\n";

			$element .= "\t\t\t\t\t<h3>".$value."</h3>\n";
			$element .= "\t\t\t\t\t<ul class=\"spell_list\"><a class=\"anchor\" id=\"".strtolower($classname)."_lvl$key\"></a>\n";

			foreach ($levspells as $spell) {
				$element .= "\t\t\t\t\t\t<li>";

				$inner = $spell['name'];
				$found = FALSE;
				foreach ($spellnames as $spellname) {
					if ($spell['sname'] == $spellname['id']) {
						$found = TRUE;
						break;
					}
				}
				if ($found) $inner = "<a onclick=\"display_spell_block('".$spell['sname']."', 'db/ajax_gen/')\">$inner</a>";

				$element .= $inner."</li>\n";
			}


			$element .= "\t\t\t\t\t</ul>\n";
		}

		$element .= "\t\t\t\t</div>\n";
	}

	$jscode .= "\t\t\t\t</script>\n";
	echo $jscode.$element;
?>