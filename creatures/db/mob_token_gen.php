<?php

$mobspath = 'mobs/';
include 'list_mobs.php';

$substr = $_GET['q'];
$mobmatches = [];
foreach ($mobnames as $mobname) {
	if (stripos($mobname['name'], $substr) !== false) $mobmatches[] = $mobname;
}

$json_response = json_encode($mobmatches);
echo $json_response;

?>