<?php

// error remind
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ("config.php");
//connect
$conn = new mysqli(localhost, username, psd, article);
//utf-8
mysqli_set_charset($conn, "utf8");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

?>
