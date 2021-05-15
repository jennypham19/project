<body>
	<style>
		.page_numbers{
			float:right;
			margin: 40px 20px 20px 0;
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
		.detail-blog{
			position: relative;
			left:15%;
			top:-730px;
			width:80%;
			height:100vh;
		}
		.detail-blog table{
			height:250px;
			width:95%;
			margin:20px 0px 0px 10px;
			border: solid 1px #000000;
		}
		.detail-blog table th{
			background: #F1A573;
		}
		.detail-blog table td{
			text-align: center;
		}
		.detail-blog h1{
			margin:10px 0px 0px 10px; 
		}
		.search{
			margin:-30px 0px 0px 825px;
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
	<div class="detail-blog">
		<?php 
		$idbaiviet='';
		include("../connect/open.php");
		if(isset($_GET['ID'])){
			$ID=$_GET['ID'];
			$sql1="SELECT * FROM `bai_viet` WHERE IDBaiViet='$ID'";
			$result1=mysqli_query($open,$sql1);
			$baiviet=mysqli_fetch_assoc($result1);
			$idbaiviet=$baiviet['IDBaiViet'];
		}
		$item_per_page = !empty ($_GET["per_page"])? $_GET["per_page"]:2;
		$current_page = !empty ($_GET["page"])? $_GET["page"]:1;
		$offset = ($current_page - 1) * $item_per_page;
		$sql="SELECT * FROM bai_viet WHERE IDBaiViet LIKE ('%$idbaiviet%') LIMIT ".$item_per_page." OFFSET " .$offset;
		$total_records= mysqli_query($open,"SELECT * FROM bai_viet  WHERE IDBaiViet LIKE ('%$idbaiviet%')");   
		$total_records = $total_records-> num_rows;
		$total_pages= ceil($total_records / $item_per_page);
		$result=mysqli_query($open,$sql);
		include("../connect/close.php");
		?>
		<h1>Thông tin bài viết</h1>
		<table border="1px" cellspacing="0" cellpadding="10px">
			<tr>
				<th>ID bài viết</th>
				<th>Tiêu đề</th>
				<th>Ảnh bài viết</th>
				<th>Mô tả</th>
				<th>Trạng thái</th>
				<th>Tác vụ</th>
			</tr>
			<?php while ($blog=mysqli_fetch_array($result)) { ?>
				<tr>
					<td><?php echo $blog["IDBaiViet"] ; ?></td>
					<td><?php echo $blog["TieuDe"] ; ?></td>
					<td><img src="../IMAGES/<?php echo $blog["AnhBlog"]; ?>" width="400px" height="150px"></td>
					<td width="280px" style="overflow: hidden;
					text-overflow: ellipsis;
					line-height:19px;
					-webkit-line-clamp: 8;
					height: 152px;
					display: -webkit-box;
					-webkit-box-orient: vertical;"><?php echo $blog["Text"];?></td>
					<td>
						<?php if($blog["TrangThai"]==0){
							echo "Ẩn";
						}else{
							echo "Hiện";
						} ?>
					</td>
					<td width="50px">
						<span style="margin-left: 10px;"><a href="bai-viet/sua-bai-viet.php?maBV=<?php echo $blog["IDBaiViet"]?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 758 666"><path d="M558 554V425l80-80v235c0 47-39 86-85 86H85c-47 0-85-39-85-86V113c0-47 38-86 85-86h475v1l-80 79H112c-17 0-32 15-32 33v414c0 18 15 32 32 32h414c17 0 32-14 32-32zm76-488l85 85l39-39l-85-85zM335 366l84 85l271-271l-84-85zm-60 144l116-31l-85-85z" fill="#626262"/></svg></a></span>
						<span><a href="bai-viet/xoa-bai-viet.php?maBV=<?php echo $blog["IDBaiViet"]?>" onclick="return confirm('Bạn có muốn xóa?')" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#626262" d="M13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29l-4.3 4.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l4.29-4.3l4.29 4.3a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42z"/></svg></a></span>
					</td>
				</tr>
			<?php } ?>
		</table>
		<div class="page_numbers">
			<?php 
			if($current_page >3) { 
				$first_page = 1;
				?>	
				<a class="page_item" href="index.php?sidebar=Blog-Watch<?php if(isset($_GET['ID'])){echo "&ID=".$ID;}?>&per_page=<?=$item_per_page?>&page=<?=$first_page?>">First</a>
			<?php } ?>	

			<?php 
			if($current_page > 1){
				$prev_page = $current_page - 1;
				?>
				<a class="page_item" href="index.php?sidebar=Blog-Watch<?php if(isset($_GET['ID'])){echo "&ID=".$ID;}?>&per_page=<?=$item_per_page?>&page=<?=$prev_page?>"><<</a>
			<?php } ?>	

			<?php for($num=1 ;$num<= $total_pages;$num++){ ?>
				<?php if($num != $current_page) { ?>
					<?php if($num > $current_page - 3 && $num < $current_page + 3) { ?>
						<a class="page_item" href="index.php?sidebar=Blog-Watch<?php if(isset($_GET['ID'])){echo "&ID=".$ID;}?>&per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
					<?php } ?>
				<?php } else { ?>
					<strong class="current_page page_item"><?=$num?></strong>
				<?php } ?>
			<?php } ?>

			<?php if($current_page < $total_pages - 1) { 
				$next_page = $current_page + 1;
				?>
				<a class="page_item" href="index.php?sidebar=Blog-Watch<?php if(isset($_GET['ID'])){echo "&ID=".$ID;}?>&per_page=<?=$item_per_page?>&page=<?=$next_page?>">>></a>
			<?php } ?>

			<?php 
			if($current_page < $total_pages - 3){
				$end_page = $total_pages;
				?>
				<a class="page_item" href="index.php?sidebar=Blog-Watch<?php if(isset($_GET['ID'])){echo "&ID=".$ID;}?>&per_page=<?=$item_per_page?>&page=<?=$end_page?>">Last</a>
			<?php } ?>
		</div>
	</div>
</body>