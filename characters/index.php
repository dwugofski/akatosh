<?php
	include "index_head.php";
?>
		<div id="header">
			<div class="sub" style="top: 110px; left: 50px;">Characters</div>
			<div class="main" style="top: 140px; left: 50px;">Meet the Party</div>
		</div>
<?php 
	if ($charname !== 'none') include "character.php";
	else include 'charlist.php';
	include "index_tail.php";
?>