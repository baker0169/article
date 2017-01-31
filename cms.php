
<!DOCTYPE html>
<html lang="en">
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
					<li class= "menu-item"><a href="cms.php">新建文章</a></li>
					<li class= "menu-item"><a href="list.php">文章管理</a></li>
					<li class= "clearfix"></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
		<div class="block">
			<h1 style="text-align: center">New Article</h1>
			<form class="form" id ="form" action= 'cms-handle.php' method="post">
				<div class="box"><input type="text" name="title" placeholder="title"></div>
				<div class="box"><input type="text" name="author" placeholder="author"></div>
				<div class="box" ><textarea class= "txtarea-1" name= "des" placeholder="description"></textarea></div>

				<div class="box" ><textarea class= "txtarea" name = "txt" placeholder="your article"></textarea></div>
				<div class="box"><input type="submit" class="sbmt"></div>
			</form>
		</div>
	</div>

</body>
</html>