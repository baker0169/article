<?php

require_once ('connect.php');

$sql   = "SELECT * from  article order by dateline desc";
$query = mysqli_query($conn, $sql);

if ($query && mysqli_num_rows($query)) {
	while ($row = mysqli_fetch_assoc($query)) {
		$data[] = $row;
	}
} else {
	$data[] = null;
	echo "<script> var j = null</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Article List</title>
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
			<h1 style="text-align: center">Article List</h1>
			<?php
			if (!empty($data)) {
				foreach ($data as $value) {
					?>
					<div class="list-box">
						<ul class="alist">
							<li class="aitem">
								<div class="a-box">
									<div class="a-block a-num">
										<span><?php echo $value['id']?></span>
									</div>
									<div class="a-block a-des">
										<h3><a href=""><?php echo $value['title']?></a></h3>
										<span><?php echo $value['author']?></span>
										<p><?php echo $value['description']?></p>
									</div>
									<div class="a-block a-btnbox">
										<a href="cms-modify.php?id=<?php echo $value['id']?>" class="a-btn">修改</a>
										<a href="<?php echo "javascript:check(".$value['id'].")";?>" class="a-btn">刪除</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
						</ul>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>

	<script>
		function check(id){
			var answer = confirm('Are you are sure ?');
			if(answer){
				window.location.href = "del.php?id="+id ;
			}
		}
		if(j == null){
			document.getElementsByClassName('list-box')[0].style.display='none'
		}


	</script>
</body>
</html>