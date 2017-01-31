<script>

function ad(m){
	alert(m);
	window.location.href = "cms-modify.php";
}

</script>

<?php

require_once ('connect.php');

if (isset($_POST["title"]) && (!empty($_POST["title"]))) {
	$id     = $_POST['id'];
	$title  = $_POST['title'];
	$author = $_POST['author'];
	$des    = $_POST['des'];
	$txt    = $_POST['txt'];

} else {
	echo "<script>ad('title is required !');</script>";
}

$dateline = date("ymdhis");

// update
$updatesql = "UPDATE article SET title = '$title', author = '$author',description='$des', content='$txt' ,dateline= '$dateline' where id = '$id' ";

$try = $conn->query($updatesql);

if ($try === TRUE) {
	echo "<script>alert('update successfully!');window.location.href= 'cms-modify.php'</script>";
} else {
	echo "Error: ".$updatesql."<br>".$conn->error;
	echo "<script>alert('failed to update !');window.location.href= 'cms-modify.php'</script>";
}

?>
