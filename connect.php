<?php 
//connect
$conn = new mysqli(localhost, username, psd, article);
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

	}else{
		echo "Connected successfully";
	}
    
//utf-8
mysqli_set_charset($conn,"utf8");


?>