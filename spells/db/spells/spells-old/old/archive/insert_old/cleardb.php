<?php

function runquery($c, $q){
	if ($c->query($q) == FALSE) die("Error running query: \n$q" . $c->error);
}

$server = "localhost";
$user = "dm";
$password = "";
$databse = "dnd_spells";

$link = mysql_connect($server, $user, $password)
    OR die(mysql_error());
$conn = new mysqli($server, $user, $password, $databse);
if ($conn->connect_error) die("Connection failed: ". $conn->connect_error);
else echo "CONNECTION ESTABLISHED\n";

runquery($conn, "DELETE FROM spells;");
runquery($conn, "ALTER TABLE annotations AUTO_INCREMENT 1;");
runquery($conn, "ALTER TABLE attributes AUTO_INCREMENT 1;");
runquery($conn, "ALTER TABLE listitems AUTO_INCREMENT 1;");
runquery($conn, "ALTER TABLE paragraphs AUTO_INCREMENT 1;");
runquery($conn, "ALTER TABLE spells AUTO_INCREMENT 1;");
runquery($conn, "ALTER TABLE tabitems AUTO_INCREMENT 1;");
runquery($conn, "ALTER TABLE tbodies AUTO_INCREMENT 1;");
runquery($conn, "ALTER TABLE uls AUTO_INCREMENT 1;");

if ($conn->query($sql) == FALSE) die("Error running query: \n$sql" . $conn->error);
else echo "Cleared database successfully!\n";

$conn->close();

?>