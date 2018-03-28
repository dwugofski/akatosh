<?php
if (isset($chapname)) $chapname = ": $chapname";
else $chapname = "";

$navsect = "chapters";

$compath = "../com/";
$respath = "../res/";
$rootpath = "../";
$mobspath = "../creatures/db/mobs/";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chapter Select</title>
	<link rel="shortcut icon" href="res/com/favicon.png"/>
	<?php
	include "../com/php/def_head.php";
	include "../com/php/gen_linkblock.php";
	?>
	
	<link rel="stylesheet" type="text/css" href="../com/css/print/chapter.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="../com/css/print/creature.css" media="print"/>
	<link rel="stylesheet" type="text/css" href="index_style.css"/>
	<script type="text/javascript">
		chsel_img = function(id, link, x, y){
			var chsel = $('#'+id+' div.imgholder');
			chsel.css('background-image', 'url('+link+')');
			chsel.css('background-size', '120%');
			chsel.css('background-position', x+' '+y);
			chsel.css('background-color', 'blue');
		}
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
		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">The Story</div>
			<div class="main" style="top: 140px; left: 50px;">Explore the Chapters</div>
		</div>
		<section>
			<h1>Select Chapters</h1>
			<hr/>
			<p class="note red">
				The campaign is quite extensive. In order to make navigating the different chapters more efficient, I have created links to each of the chapters on this page. Please select the chapter you wish to explore:
			</p>
<?php
generate_linkblocks([
	['id' => 'bruma', 'link' => '01_bruma/', 'text' => 'Ch 1. Bruma and Piukanda', 'img' => '../res/backs/cold_city.jpg', 'x' => '50%', 'y' => '-250px'],
	['id' => 'skyrim', 'link' => '02_skyrim/', 'text' => 'Ch 2. Retrieving the Bal Falruhn', 'img' => '../res/backs/eastmarch.jpg', 'x' => '50%', 'y' => '-250px'],
	['id' => 'cheydinhal', 'link' => '03_cheydinhal/', 'text' => 'Ch 3. Chaos in Cheydinhal', 'img' => '../res/backs/dragonfire.jpg', 'x' => '50%', 'y' => '-300px'],
	['id' => 'leyawiin', 'link' => '05_leyawiin/', 'text' => 'Ch 4. Leyawiin Lurkers', 'img' => '../res/backs/mephala.jpg', 'x' => '50%', 'y' => '300px']
	]);
?>
		</section>
	</div>
</div>
</body>
</html>