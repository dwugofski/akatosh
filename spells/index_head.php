<?php
$navsect = "spells";

$compath = "../com/";
$respath = "../res/";
$rootpath = "../";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Splinters of Akatosh: Spells</title>
	<?php
	include "../com/php/def_head.php";
	?>
	<link rel="stylesheet" type="text/css" href="../com/css/select2.min.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="../com/css/print/spells.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="index_style.css"/>
<?php
	$spellpath = "db/spells/";
	include "../com/php/mustache.php";
	include "../com/php/load_game_entities.php";
	include "db/list_spells.php";
	include "db/sql/query_spells.php";
	include "db/sql/spell_filtering.php";
?>
	<script type="text/javascript" src="../com/js/def/jquery.tokeninput.js"></script>
	<script type="text/javascript" src="../com/js/def/select2.min.js"></script>
	<script type="text/javascript" src="db/ajax_gen/generate_spell.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		    $("#spellsearch").tokenInput("db/spell_token_gen.php", {theme: 'facebook'});
			$('#school_sel').select2({ width: '15em'});
			$('#class_sel').select2({ width: '15em'});
			$('#lvl_sel').select2({ width: '7em'});
		});
	</script>
</head>
<body>

<?php include "../com/php/def_navbar.php";?>
<div id="sidenav">
	<nav class="container">
	</nav>
</div>
<div id="content">
	<div id="sidebar">
	</div>
	<div id="main">