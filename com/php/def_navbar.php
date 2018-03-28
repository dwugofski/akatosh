<?php
if (! isset($rootpath)) $rootpath = "dnd.akatosh.com";
if (substr($rootpath, -1) != "/" && $rootpath !== "") $rootpath = $rootpath . "/";
if (! isset($compath)) $compath = "dnd.akatosh.com/com/";
if (substr($compath, -1) != "/") $compath = $compath . "/";

$homeactive = "";
$overactive = "";
$chapactive = "";
$spellactive = "";
$creatactive = "";
$charaactive = "";
switch($navsect) {
	case "overview":
		$overactive = " active";
		break;
	case "chapters":
		$chapactive = " active";
		break;
	case "spells":
		$spellactive = " active";
		break;
	case "creatures":
		$creatactive = " active";
		break;
	case "characters":
		$charaactive = " active";
		break;
	case "background":
		$backactive = " active";
		break;
	default:
		$homeactive = " active";
}
?>

<div id="media_ident"></div>
<div id="heading">
	<a href="<?= $rootpath?>"><span class="special">Splinters of</span> Akatosh</a>
</div>
<div id="navbar">
	<nav class="links">
		<span id="homelink" class="link home<?= $homeactive?>"><!-- <a href="<?= $rootpath?>"></a>--></span>
<?php include "".$compath."php/def_navbar_over.php"?>
<?php include "".$compath."php/def_navbar_chap.php"?>
<?php include "".$compath."php/def_navbar_spells.php"?>
<?php include "".$compath."php/def_navbar_mob.php"?>
<?php include "".$compath."php/def_navbar_char.php"?>
	</nav>
</div>