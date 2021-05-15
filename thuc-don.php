<?php 
	$idthloai='';
	include("connect/open.php");
	if(isset($_GET['TL'])){
		$TL=$_GET['TL'];
		$sql1="SELECT * FROM `the-loại` WHERE TenTheLoai='$TL'";
		$result1=mysqli_query($open,$sql1);
		$theloai=mysqli_fetch_assoc($result1);
		$idthloai=$theloai['maTheLoai'];
	}
	
	$item_per_page = !empty ($_GET["per_page"])? $_GET["per_page"]:9;
	$current_page = !empty ($_GET["page"])? $_GET["page"]:1;
	$offset = ($current_page - 1) * $item_per_page;
	$sql="SELECT * FROM product WHERE MaTheLoai LIKE ('%$idthloai%') LIMIT ".$item_per_page." OFFSET " .$offset;
	$total_records= mysqli_query($open,"SELECT * FROM product  WHERE MaTheLoai LIKE ('%$idthloai%')");   
	$total_records = $total_records-> num_rows;
	$total_pages= ceil($total_records / $item_per_page);
	$result=mysqli_query($open,$sql);
	include("connect/close.php");
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thực Đơn</title>
	<link rel="stylesheet" type="text/css" href="style/css/grid.css">	
	<link rel="stylesheet" href="style/css/header.css">
</head>

	<style type="text/css" media="screen">
		
		*{
			box-sizing: border-box;
			margin:0;
			padding:0;
			font-family:sans-serif;
		}
		.grid{
			margin-top: 80px;
		}
		.item{
			height: 500px;
			text-align: center;
			background-color: #F4F4F4;
			width: 380px;
			margin-left: 33px;
		}
		.row .item:hover{
			border:2px solid #FF9966;
		}
		.col{
			margin-bottom: 40px;
		}
		.item .xem {
			display: inline-block;
			text-decoration: none;
			color:#333;
			border-radius: 5px;
			background-color: #F1A573;
			padding: 7px;
			margin-top:10px;
		}
		.item .xem:hover {
			background-color: #FF9966;
			color:#FFF;
		}
		.header-thuc-don {
			width: 100%;
			height: 70px;
			background-color:#DDDDDD;
			margin:0 0 30px 0;
		}
		.header-thuc-don a{
			text-decoration: none;     
			color:black;
			line-height: 30px;
			font-size:13px;
			margin-left:30px;
		}
		.header-thuc-don a:hover{
			text-decoration:underline;
			color: 	#006600;
		}
		.header-thuc-don span{
			color:black;
			line-height: 30px;
			font-size:13px;
		}
		.header-thuc-don p{
			font-size: 30px;
			margin: 0px 0 0 30px;
		}
		.page_item{
			display: inline-block;
			text-decoration: none;
			color:black;
			padding: 10px;
			border:1px solid black;
		}
		.page_item:hover{
			border:#F4A460;
		}
		.current_page {
			background-color: #F4A460;
		}
		.page_numbers{
			float:right;
			margin: 0 20px 20px 0;
		}
	</style>

<body>
	<div class="grid">
		<div class="header-thuc-don">
			<a href="index.php?header=trang-chu">Home</a> <span>/ Thực đơn </span>
			<p>Thực Đơn</p>
		</div>
		<div class="row">
			
			<?php while ($product=mysqli_fetch_assoc($result)){ ?>
				 <div class="col l-4 m-6 c-12">
					<div class="item">
						<img src="./IMAGES/<?php echo $product["AnhSP"]; ?>" style="width:90%;height: 350px; margin-top:20px;"><br><br>
						<h2><?php echo $product["TenSP"]; ?></h2>
						<a class="xem" href="index.php?header=chi-tiet&id=<?php echo $product["MaSP"]?>"> Xem thêm </a>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="page_numbers">
		<?php 
			if($current_page >3) { 
			$first_page = 1;
		?>	
			<a class="page_item" href="index.php?header=thuc-don<?php if(isset($_GET['TL'])){echo "&TL=".$TL;}?>&per_page=<?=$item_per_page?>&page=<?=$first_page?>">First</a>
		<?php } ?>	

		<?php 
			if($current_page > 1){
				$prev_page = $current_page - 1;
		?>
			<a class="page_item" href="index.php?header=thuc-don<?php if(isset($_GET['TL'])){echo "&TL=".$TL;}?>&per_page=<?=$item_per_page?>&page=<?=$prev_page?>"><<</a>
		<?php } ?>	

		<?php for($num=1 ;$num<= $total_pages;$num++){ ?>
			<?php if($num != $current_page) { ?>
				<?php if($num > $current_page - 3 && $num < $current_page + 3) { ?>
			<a class="page_item" href="index.php?header=thuc-don<?php if(isset($_GET['TL'])){echo "&TL=".$TL;}?>&per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
			<?php } ?>
			<?php } else { ?>
			<strong class="current_page page_item"><?=$num?></strong>
			<?php } ?>
		<?php } ?>

		<?php if($current_page < $total_pages - 1) { 
			$next_page = $current_page + 1;
		?>
		<a class="page_item" href="index.php?header=thuc-don<?php if(isset($_GET['TL'])){echo "&TL=".$TL;}?>&per_page=<?=$item_per_page?>&page=<?=$next_page?>">>></a>
		<?php } ?>

		<?php 
			if($current_page < $total_pages - 3){
				$end_page = $total_pages;
		 ?>
		 <a class="page_item" href="index.php?header=thuc-don<?php if(isset($_GET['TL'])){echo "&TL=".$TL;}?>&per_page=<?=$item_per_page?>&page=<?=$end_page?>">Last</a>
		<?php } ?>
		</div>
	</div>
</body>
</html>