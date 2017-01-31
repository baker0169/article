<head>
		<meta charset="UTF-8">
		<title>count</title>
	</head>
	<body>
	<style type="text/css">
		img{
			width: 100px;
		}
		.box{
			margin-bottom: 20px;
		}
		.block{
			padding: 20px 0;
		}
	</style>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
	<?php
$name = $_POST['name'];
$chk  = $_POST['chk'];
$txt  = $_POST['txt'];
?>
	<?php
$servername = "localhost";
$username   = "root";
$password   = "63206320";
$dbname     = "my_db";
//connect mysql
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
} else {
	echo "Connected successfully";
}
?>
<div class="block">

	</div>
	<div>
<?php
$repeat = "SELECT * FROM cms where(name = '$name' AND agree = '$chk' AND massage = '$txt')";
$result = mysqli_query($conn, $repeat);
$row    = mysqli_fetch_row($result);

if ($row > 0) {
	echo 'reapeat';
} else {
	$sql = "INSERT INTO cms(name,agree ,massage)
		VALUES('$name', '$chk', '$txt')";
	$try = $conn->query($sql);
	echo "write successfully";
}

//if ($try === TRUE) {

//echo "New record created successfully";
//header('Location:cms.php');
//} else {
//echo "Error: " . $sql . "<br>" . $conn->error;
//echo 'something wrong';
//}

$conn->close();
?>
	</div>
	</body>
	</html>