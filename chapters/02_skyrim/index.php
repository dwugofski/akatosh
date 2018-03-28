<?php
	$chapname = "Skyrim";
	include "../index_head.php";

	$section_info = [
		'whiterun' => [
			'fname' => 'city_of_whiterun.php', 
			'lastsect' => false,
			'lname' => false,
			'nextsect' => 'welcome',
			'nname' => 'Welcome to Skyrim'
			],
		'welcome' => [
			'fname' => 'welcome_to_skyrim.php',
			'lastsect' => 'whiterun',
			'lname' => 'The City of Whiterun',
			'nextsect' => 'volunruud',
			'nname' => 'Volunruud'
			],
		'volunruud' => [
			'fname' => 'volunruud.php',
			'lastsect' => 'welcome',
			'lname' => 'Welcome to Skyrim',
			'nextsect' => 'labyrinthian',
			'nname' => 'Labyrinthian'
			],
		'labyrinthian' => [
			'fname' => 'labyrinthian.php',
			'lastsect' => 'volunruud',
			'lname' => 'Volunruud',
			'nextsect' => 'brains',
			'nname' => 'The Brains of the Operation'
			],
		'brains' => [
			'fname' => 'brains_of_the_operation.php',
			'lastsect' => 'labyrinthian',
			'lname' => 'Labyrinthian',
			'nextsect' => 'cabin',
			'nname' => 'Cabin in the Tundra'
			],
		'cabin' => [
			'fname' => 'cabin_in_the_tundra.php',
			'lastsect' => 'brains',
			'lname' => 'The Brains of the Operation',
			'nextsect' => false,
			'mname' => false
			],
	];

	switch($_GET['sect']){
		case 'whiterun':
		case 'welcome':
		case 'volunruud':
		case 'labyrinthian':
		case 'brains':
		case 'cabin':
			$sectname = $_GET['sect'];
			break;
		default:
			$sectname = 'whiterun';
	}
?>
		
		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">Chapter 2</div>
			<div class="main" style="top: 140px; left: 50px;">Retrieving the Bal Falruhn</div>
		</div>
<?php include "../../com/php/def_selection_bar.php"; ?>
		<script type="text/javascript">
			whiterun_reflink_h1 = container_reflink.add_element("The City of Whiterun", "./?sect=whiterun", 1);
			welcome_to_skyrim_h1 = container_reflink.add_element("Welcome to Skyrim", "./?sect=welcome", 1);
			volunruud_h1 = container_reflink.add_element("Volunruud", "./?sect=volunruud", 1);
			labyrinthian_anc = container_reflink.add_element("Labyrinthian", "./?sect=labyrinthian", 1);
			the_brains_of_the_operation_anc = container_reflink.add_element("The Brains of the Operation", "./?sect=brains", 1);
			the_cabin_in_the_tundra_anc = container_reflink.add_element("The Cabin in the Tundra", "./?sect=cabin", 1);
		</script>
<?php 
	include $section_info[$sectname]['fname'];
	include "../index_tail.php";
?>