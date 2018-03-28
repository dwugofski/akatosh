<?php

function sql_manage_error($reponse) {
	if ($reponse['error'] == TRUE) echo "<!-- ".htmlspecialchars($reponse['error'])." -->";
	else echo "<!-- manage_error detected no error -->";
}

function player_query($dbname, $sql) {
	$response = ['error'=>FALSE, 'result'=>FALSE];

	$servername = "localhost";
	$username = "dnd_player";
	$password = "";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		$reponse['error'] = "Connection failed: ". $conn->connect_error;
		return $response;
	}

	$response['result'] = $conn->query($sql);
	if ($conn->error == TRUE) $response['error'] = "Error running query <<".$sql.">>: ".$conn->error;

	return $response;
}

function query_rows($dbname, $sql) {
	$rows = [];
	$sql_response = player_query($dbname, $sql);
	if ($sql_response['error'] == TRUE) sql_manage_error($sql_response);
	else while ($row = $sql_response['result']->fetch_assoc())
		$rows[] = $row;

	return $rows;
}

?>