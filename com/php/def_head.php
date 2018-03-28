<?php
include "con_check.php";
include "mysql_util.php";

if (! isset($compath)) $compath = "dnd.akatosh.com/com/";
if (substr($compath, -1) != "/") $compath = $compath . "/";
if (! isset($respath)) $respath = "dnd.akatosh.com/res/";
if (substr($respath, -1) != "/") $respath = $respath . "/";
?>
	<link rel="icon" href="<?= $respath?>com/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/main.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/print/content.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/print/dice.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/print/heading.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/print/navbar.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/print/sidenav.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/viewer.css" media="screen"/>
	<!-- <link rel="stylesheet" type="text/css" href="<?= $compath?>css/fonts.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/body.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/content.css"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/print/content.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/dice.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/print/dice.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/heading.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/print/heading.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/navbar.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/print/navbar.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/sidenav.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="<?= $compath?>css/print/sidenav.css" media="print"/> -->
	<script type="text/javascript" src="<?= $compath?>js/def/jquery.js"></script>
	<script type="text/javascript" src="<?= $compath?>js/def/mustache.js"></script>
	<script type="text/javascript" src="<?= $compath?>js/def/viewer.js"></script>
	<script type="text/javascript" src="<?= $compath?>js/def/resize_sensor.js"></script>
	<script type="text/javascript" src="<?= $compath?>js/def/element_queries.js"></script>
	<script type="text/javascript" src="<?= $compath?>js/def/def_head_rendering.js"></script>
	<script type="text/javascript" src="<?= $compath?>js/def/def_sidenav_render.js"></script>
	<script type="text/javascript" src="<?= $compath?>js/def/def_fill_sidenav.js"></script>