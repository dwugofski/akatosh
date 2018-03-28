<?php
$navsect = "characters";

$compath = "../com/";
$respath = "../res/";
$rootpath = "../";

$charname = 'amadrano';
$clnames = [
	"none" => "Characters",
	"amadrano" => "Amadrano",
	"darusuprene" => "Darus Uprene",
	"gizmo" => "Gizmo",
	"karaggroelimack" => "Karag Gro-Elimack",
	"kelei" => "Kel-Ei",
	"miraandarys" => "Mira Andarys",
	"neradrystelvanni" => "Neradrys Telvanni",
	"playswithfire" => "Plays-With-Fire",
	"qazahtadar" => "Qa'Zahta-Dar",
	"trasusaquilus" => "Trasus Aquilus",
	"razur" => "Razur",
	"zala" => "Zala"
];
switch($_GET['char']){
	case 'amadrano':
	case 'darusuprene':
	case 'gizmo':
	case 'karaggroelimack':
	case 'kelei':
	case 'miraandarys':
	case 'neradrystelvanni':
	case 'playswithfire':
	case 'qazahtadar':
	case 'trasusaquilus':
	case 'razur':
	case 'zala':
		$charname = $_GET['char'];
		break;
	default:
		$charname = 'none';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$clnames[$charname]?></title>
	<?php
	include "../com/php/def_head.php";
	?>
	<link rel="stylesheet" type="text/css" href="../com/css/print/character.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="../com/css/print/spells.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="index_style.css"/>
<?php
	include "../com/php/mustache.php";
	include "../com/php/load_game_entities.php";
	include 'db/chars/'.$charname.'.php';
	include "../com/php/gen_linkblock.php";
	$spellspath = "../spells/db/spells/";
	$charsspath = "db/chars/";
	if ($charname !== 'none') $character = ${$charname.'_character'};
?>
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