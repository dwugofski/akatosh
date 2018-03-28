<?php
$navsect = "overview";

$compath = "../com/";
$respath = "../res/";
$rootpath = "../";

if (! isset($_GET["section"]))
	$over_sect = "site";
else
	$over_sect = $_GET["section"];

$sect_name = [
	"site" => "Splinters of Akatosh",
	"mech" => "Campaign Mechanics",
	"dmd" => "The DM Rules",
	"race" => "Races of Tamriel",
	"mag" => "Magical Items"
];
switch($over_sect){
	case 'site':
	case 'mech':
	case 'race':
	case 'mag':
	case 'dmd':
		break;
	default:
		$over_sect = 'site';
}

if ($over_sect == 'site') header('Location: ../');

?>
<!DOCTYPE html>
<html>
<head>
	<title><?=$sect_name[$over_sect]?></title>
	<?php
	include "../com/php/def_head.php";
	?>

	<link rel="stylesheet" type="text/css" href="../com/css/print/chapter.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="<?=$over_sect?>/index_style.css"/>
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