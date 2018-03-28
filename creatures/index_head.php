<?php
$navsect = "creatures";

$compath = "../com/";
$respath = "../res/";
$rootpath = "../";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Creatures of Tamriel</title>
	<?php
	include "../com/php/def_head.php";
	?>
	<link rel="stylesheet" type="text/css" href="../com/css/print/creature.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="index_style.css"/>
	<?php
	$mobspath = "db/mobs/";
	include "../com/php/mustache.php";
	include "../com/php/load_game_entities.php";
	include "db/list_mobs.php";
	?>
	<script type="text/javascript" src="../com/js/def/jquery.tokeninput.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		    $("#mobsearch").tokenInput("db/mob_token_gen.php", {theme: 'facebook'});
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