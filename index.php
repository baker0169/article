<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
	<style type="text/css">
		img{
			width: 100px;
		}
	</style>
	<div class="block">
		<?php
		$card = rand(1,3);
		echo "<img src=\"images/$card.jpg\">";
		?>
	</div>
		<a href="index-1.php?n=1"><img src="images/1.jpg"></a>
		<a href="index-1.php?n=2"><img src="images/2.jpg"></a>
		<a href="index-1.php?n=3"><img src="images/3.jpg" alt= "new">click me</a>
	</body>
	</html>	