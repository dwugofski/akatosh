<?php

function errorfun($msg){
	echo "!!!,<p class=\"error\">$msg</p>";
	exit();
}

function runquery($c, $q){
	$r = $c->query($q);
	if ($c->error == TRUE) errorfun("Error running query '$q': \n\n".$c->error);
	return $r;
}

$servername = "localhost";
$username = "dnd_player";
$password = "";
$dbname = "dnd_spells";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) errorfun("Connection failed: ". $conn->connect_error);

$sql = "SELECT name FROM spells ORDER BY name";
$result = runquery($conn, $sql);
if ($result->num_rows == 0) errorfun("No spells in database.");

$pre = "";
$spells = "";
while($row = $result->fetch_assoc()){
	$spells = $spells.$pre.$row['name'];
	$pre = ",";
}
echo $spells;

$conn->close();

?>