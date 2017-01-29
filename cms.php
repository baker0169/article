<head>
	<meta charset="UTF-8">
	<title>edit your article</title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="block">
			<div class="header">
				<ul class="menu-list">
					<li class= "menu-item"><a href="">New Article</a></li>
					<li class= "menu-item"><a href="">Manage Article</a></li>
					<li class= "clearfix"></li>
				</ul>
			</div>
		</div>
		<div class="block">
			<form class="form" action= 'thx.php' method = "post">
				<div class="box"><input type="text" name="title" placeholder="name"></div>

				<div class="box" ><textarea class= "txtarea" name = "txt" placeholder="text you like"></textarea></div>
				<div class="box"><input type="submit"></div>
			</form>
		</div>
	</div>

</body>
</html>	