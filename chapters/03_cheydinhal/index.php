<?php
	$section_info = [
		'cheydinhal' => [
			'fname' => 'cheydinhal.php', 
			'name' => 'The City of Cheydinhal',
			'lastsect' => false,
			'lname' => false,
			'nextsect' => 'kemen',
			'nname' => 'Investigating Kemen'
			],
		'kemen' => [
			'fname' => 'kemen.php', 
			'name' => 'Investigating Kemen',
			'lastsect' => 'cheydinhal',
			'lname' => 'The City of Cheydinhal',
			'nextsect' => 'wizard',
			'nname' => 'A Vile Deal'
			],
		'wizard' => [
			'fname' => 'wizard.php', 
			'name' => 'A Vile Deal',
			'lastsect' => 'kemen',
			'lname' => 'Investigating Kemen',
			'nextsect' => 'oblivion',
			'nname' => "Onto Oblivion"
			],
		'oblivion' => [
			'fname' => 'oblivion.php', 
			'name' => 'Onto Oblivion',
			'lastsect' => 'wizard',
			'lname' => 'A Vile Deal',
			'nextsect' => 'enchanter',
			'nname' => 'Party Favors'
			],
		'enchanter' => [
			'fname' => 'enchanter.php', 
			'name' => 'Party Favors',
			'lastsect' => 'oblivion',
			'lname' => 'Onto Oblivion',
			'nextsect' => false, 
			'nname' => false
			]
	];

	switch($_GET['sect']){
		case 'cheydinhal':
		case 'kemen':
		case 'enchanter':
		case 'wizard':
		case 'oblivion':
			$sectname = $_GET['sect'];
			break;
		default:
			$sectname = 'cheydinhal';
	}

	$chapname = $section_info[$sectname]['name'];
	include "../index_head.php";
?>
		
		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">Chapter 3</div>
			<div class="main" style="top: 140px; left: 50px;">Chaos in Cheydinhal</div>
		</div>
<?php include "../../com/php/def_selection_bar.php"; ?>
		<script type="text/javascript">
			cheydinhal_reflink_h1 = container_reflink.add_element("The City of Cheydinhal", "./?sect=cheydinhal", 1);
			kemen_reflink_h1 = container_reflink.add_element("Investigating Kemen", "./?sect=kemen", 1);
			wizard_reflink_h1 = container_reflink.add_element("A Vile Deal", "./?sect=wizard", 1);
			oblivion_reflink_h1 = container_reflink.add_element("Onto Oblivion", "./?sect=oblivion", 1);
			enchanter_reflink_h1 = container_reflink.add_element("Party Favors", "./?sect=enchanter", 1);
		</script>
<?php 
	if (con_check()) include $section_info[$sectname]['fname'];
	else echo "<section><p>This section is not currently available except to the DM</p></section>";
	include "../../com/php/def_selection_bar.php";
	include "../index_tail.php";
?>