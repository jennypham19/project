<?php 
session_start();
if(!isset($_SESSION["admin"])){
	header("Location:dang-nhap.php");
}
?>
<body>
	<style type="text/css">
		.search-menu{
			width:100%;
			height:100vh;
		}
		.index > .page_numbers{
			margin: 20px 40px 20px 1090px;
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
		.index{
			position:fixed;
			left:15%;
			top:50px;
			width:100%;
			height:100vh;
		}
		.index table{
			height:250px;
			margin:20px 0px 0px 30px;
			border: solid 1px #000000;
		}
		.index table th{
			background: #F1A573;
		}
		.index table td{
			text-align: center;
		}
		.index h1{
			margin:0px 0px 0px 10px; 
		}
		.index > .search{
			margin:-30px 0px 0px 902px;
		}
		.search input{
			border-radius:10px;
			height:30px;
		}
		.search button{
			width:40px;
			height:30px;
			background: #F1A573;
		}
	</style>
	<div class="search-menu">
		<?php 
		include("side-bar.php");
		include("content-admin.php");
		?>
		<?php if(isset($_GET['search']) && !$_GET['search']==NULL){  ?>
			<?php 
			include("../connect/open.php");
			$search="";
			if(isset($_GET['search'])){
				$search=$_GET['search'];
			}
			$item_per_page = !empty ($_GET["per_page"])? $_GET["per_page"]:3;
			$current_page = !empty ($_GET["page"])? $_GET["page"]:1;
			$offset = ($current_page - 1) * $item_per_page;
			$sql="SELECT * FROM product WHERE TenSP like'%$search%' LIMIT ".$item_per_page." OFFSET " .$offset;
			$total_records= mysqli_query($open,"SELECT * FROM product WHERE TenSP like'%$search%'");   
			$total_records = $total_records-> num_rows;
			$total_pages= ceil($total_records / $item_per_page);
			$result=mysqli_query($open,$sql);
			include("../connect/close.php");
			?>
			<div class="index"><h1>Thông tin sản phẩm</h1>
				<div class="search">
					<form action="" method="get">
						<input type="text" name="search" id="input" placeholder="Tìm kiếm" size="40px">
						<button type="">Tìm</button>
					</form>
				</div>
				<table border="1px" cellpadding="5px" cellspacing="0">
					<tr>
						<th>Mã Sản Phẩm</th>
						<th>Mã Thể Loại</th>
						<th>Tên Sản Phẩm</th>
						<th>Mô Tả</th>
						<th>Giá</th>
						<th>Đơn vị</th>
						<th>Ảnh Sản Phẩm</th>
					</tr>
					<?php 
					while ($tim=mysqli_fetch_assoc($result)) {?>
						<tr>
							<td><?php echo $tim["MaSP"] ?></td>
							<td><?php echo $tim["MaTheLoai"] ?></td>
							<td><?php echo $tim["TenSP"] ?></td>
							<td width="380px"><?php echo $tim["MoTa"] ?></td>
							<td><?php echo $tim["Gia"] ?></td>
							<td><?php echo $tim["donvi"] ?></td>
							<td><img src="../IMAGES/<?php echo $tim["AnhSP"] ?>" width="400px" height="150px"></td>
						</tr>
						<?php
					}
					?>
				</table>
				<div class="page_numbers">
					<?php 
					if($current_page >3) { 
						$first_page = 1;
						?>	
						<a class="page_item" href="index.php?sidebar=Menu-Watch<?php if(isset($_GET['search'])){echo "&search=".$search;}?>&per_page=<?=$item_per_page?>&page=<?=$first_page?>">First</a>
					<?php } ?>	

					<?php 
					if($current_page > 1){
						$prev_page = $current_page - 1;
						?>
						<a class="page_item" href="index.php?sidebar=Menu-Watch<?php if(isset($_GET['search'])){echo "&search=".$search;}?>&per_page=<?=$item_per_page?>&page=<?=$prev_page?>"><<</a>
					<?php } ?>	

					<?php for($num=1 ;$num<= $total_pages;$num++){ ?>
						<?php if($num != $current_page) { ?>
							<?php if($num > $current_page - 3 && $num < $current_page + 3) { ?>
								<a class="page_item" href="index.php?sidebar=Menu-Watch<?php if(isset($_GET['search'])){echo "&search=".$search;}?>&per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
							<?php } ?>
						<?php } else { ?>
							<strong class="current_page page_item"><?=$num?></strong>
						<?php } ?>
					<?php } ?>

					<?php if($current_page < $total_pages - 1) { 
						$next_page = $current_page + 1;
						?>
						<a class="page_item" href="index.php?sidebar=Menu-Watch<?php if(isset($_GET['search'])){echo "&search=".$search;}?>&per_page=<?=$item_per_page?>&page=<?=$next_page?>">>></a>
					<?php } ?>

					<?php 
					if($current_page < $total_pages - 3){
						$end_page = $total_pages;
						?>
						<a class="page_item" href="index.php?sidebar=Menu-Watch<?php if(isset($_GET['search'])){echo "&search=".$search;}?>&per_page=<?=$item_per_page?>&page=<?=$end_page?>">Last</a>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php }else{
		if(isset($_GET["sidebar"])){
			$sidebar=$_GET["sidebar"];
			switch ($sidebar) {
				case 'Genre-Watch':
				include("the-loai/xem-the-loại.php");
				break;
				case 'Genre-Add':
				include("the-loai/them-the-loại.php");
				break;
				case 'Menu-Watch':
				include("thuc-don/xem-thuc-don.php");
				break;
				case 'Menu-Add':
				include("thuc-don/them-thuc-don.php");
				break;
				case 'Blog-Watch':
				include("bai-viet/xem-bai-viet.php");
				break;
				case 'Blog-Add':
				include("bai-viet/them-bai-viet.php");
				break;
				case 'Bill-Watch':
				include("hoa-don/xem-hoa-don.php");
				break;
				case 'Staff-Info':
				include("nhan-vien/thong-tin-nhan-vien.php");
				break;
				case 'Add-Acount':
				include("nhan-vien/them-tai-khoan.php");
				break;
				default:
				include("thuc-don/xem-thuc-don.php");
			}
		}else {
			include("thuc-don/xem-thuc-don.php");
		}
	}
	?>
</body>
</html>