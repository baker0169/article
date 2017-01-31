<script>

function ad(m){
	alert(m);
	window.location.href = "cms.php";
}

</script>

<?php

require_once ('connect.php');

if (isset($_POST["title"]) && (!empty($_POST["title"]))) {

	$title  = $_POST['title'];
	$author = $_POST['author'];
	$des    = $_POST['des'];
	$txt    = $_POST['txt'];

} else {
	echo "<script>ad('title is required !');</script>";
}

$dateline = date("ymdhis");

$link = "INSERT INTO article(title,author,description,content,dateline) VALUES('$title','$author','$des','$txt',$dateline)";

$try = $conn->query($link);

if ($try === TRUE) {
	echo "<script>alert('add successfully!');window.location.href= 'cms.php'</script>";
} else {
	echo "Error: ".$link."<br>".$conn->error;
	echo "<script>alert('failed to add !');window.location.href= 'cms.php'</script>";
}

?>

