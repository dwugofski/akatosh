<?php
if (!isset($chapname)) $chapname = "";

$navsect = "chapters";

$compath = "../../com/";
$respath = "../../res/";
$rootpath = "../../";
$chappath = "../";
$mobspath = "../../creatures/db/mobs/";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $chapname?></title>
	<?php
	include "../../com/php/def_head.php";
	?>
	
	<link rel="stylesheet" type="text/css" href="../../com/css/print/chapter.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="../../com/css/print/creature.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="index_style.css"/>
	<script type="text/javascript" src="../../spells/db/sql/spell_list.js"></script>
	<script type="text/javascript" src="../../com/js/rnd/seedrandom.js"></script>
	<script type="text/javascript" src="../../com/js/rnd/gen_treasure.js"></script>
</head>
<body>

<?php include "../../com/php/def_navbar.php";?>
<div id="sidenav">
	<nav class="container">
	</nav>
</div>
<div id="content">
	<div id="sidebar">
	</div>
	<div id="main">