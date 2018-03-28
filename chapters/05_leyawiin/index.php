<?php
	$section_info = [
		'leyawiin' => [
			'fname' => 'leyawiin.php', 
			'name' => 'The City of Leyawiin',
			'lastsect' => false,
			'lname' => false,
			'nextsect' => 'arastara',
			'nname' => 'Finding Arastara'
			],
		'arastara' => [
			'fname' => 'arastara.php', 
			'name' => 'Finding Arastara',
			'lastsect' => 'leyawiind',
			'lname' => 'The City of Leyawiin',
			'nextsect' => 'veyond',
			'nname' => 'Exploring Veyond'
			],
		'veyond' => [
			'fname' => 'veyond.php', 
			'name' => 'Exploring Veyond',
			'lastsect' => 'arastara',
			'lname' => 'Finding Arastara',
			'nextsect' => false,
			'nname' => false
			]
	];

	switch($_GET['sect']){
		case 'leyawiin':
		case 'arastara':
		case 'veyond':
			$sectname = $_GET['sect'];
			break;
		default:
			$sectname = 'leyawiin';
	}

	$chapname = $section_info[$sectname]['name'];
	include "../index_head.php";
?>
		
		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">Chapter 5</div>
			<div class="main" style="top: 140px; left: 50px;">Leyawiin Lurkers</div>
		</div>
<?php include "../../com/php/def_selection_bar.php"; ?>
		<script type="text/javascript">
			leyawiin_reflink_h1 = container_reflink.add_element("The City of Leyawiin", "./?sect=leyawiin", 1);
			arastara_reflink_h1 = container_reflink.add_element("Finding Arastara", "./?sect=arastara", 1);
			veyond_reflink_h1 = container_reflink.add_element("Exploring Veyond", "./?sect=veyond", 1);
		</script>
<?php 
	if (con_check()) include $section_info[$sectname]['fname'];
	else echo "<section><p>This section is not currently available except to the DM</p></section>";
	include "../../com/php/def_selection_bar.php";
	include "../index_tail.php";
?>