<?php 
	include("connect/open.php");
	$sql="SELECT * FROM `the-loại`";
	$result=mysqli_query($open,$sql);
	include("connect/close.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="style/css/header.css">
</head>
<body>
	<div class="header">
		<div class="header-left">
			<h2><a href="index.php?header=trang-chu.php">Bếp Ngon</a></h2>
		</div>
		<div class="header-right">
			<div class="header-right-top">
				<form action="">
					<div id="input-icon">
						<input type="text" name="search" id="input" placeholder="Tìm kiếm">
							<button type="">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
							<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
							</svg>
							</button>
					</div>
				</form>
			</div>
		<div id="header-right-bottom">
			<ul class="parent">
				<li>
					<a href="index.php?header=trang-chu">Trang chủ</a>
				</li>
				<li>
					<a href="index.php?header=thuc-don">Thực đơn</a>
					<ul class="children">
						<?php while($sp=mysqli_fetch_assoc($result)){ ?>
						<li>
							<a href="index.php?header=thuc-don&TL=<?php echo $sp['TenTheLoai'] ?> ">
								<?php echo $sp['TenTheLoai'] ?></a>
						</li>
					<?php } ?>
					</ul>
				</li>
				<li>
					<a href="index.php?header=blog">Blog</a>
				</li>
				<li>
					<a href="index.php?header=dat-ban">Đặt bàn</a>
				</li>
				<li>
					<a href="index.php?header=lien-he">Liên hệ</a>
				</li>

			</ul>
			</div>
		</div>
	</div>
</body>
</html>