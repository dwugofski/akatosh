<?php

function con_check() {
	return in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'));
}

function con_fail() {
	if (!con_check()) die("Ah, ah, ah! You didn't say the magic word.");
}

?>