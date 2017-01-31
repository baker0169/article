<?php

require_once ('connect.php');

$id = $_GET['id'];

$del   = "DELETE from  article WHERE id = $id";
$query = mysqli_query($conn, $del);

if ($query) {
	echo "<script>alert('delete  successfully!');window.location.href= 'list.php'</script>";
} else {
	echo "Error: ".$del."<br>".$conn->error;
	echo "<script>alert('failed to delete !');window.location.href= 'list.php'</script>";
}

?>