<body>
	<style type="text/css">
		.see-bill-2-1{
			position: relative;
			left:15%;
			top:-730px;
			width:80%;
			height:100vh;
		}
		.see-bill-2 table{
			height:285px;
			width:100%;
			margin:50px 0px 0px 10px;
			border: solid 1px #000000;
		}
		.see-bill-2 table th{
			background: #F1A573;
		}
		.see-bill-2 table td{
			text-align: center;
		}
		.see-bill-2 h1{
			margin:30px 0px 0px 10px; 
		}
	</style>
	<div class="see-bill-2">
		<?php  
		include("../side-bar.php");
		include("../content-admin.php");
		?>
		<?php 
		include("../../connect/open.php");
		$sql="SELECT * FROM `hoa-don` WHERE trangThai=0" ;
		$result=mysqli_query($open,$sql);
		include("../../connect/close.php");
		?>
		<div class="see-bill-2-1">
			<h1>Chi tiết hóa đơn</h1>
			<a href="../index.php?sidebar=Bill-Watch" style="color: #000;margin-left: 10px;">Come back</a>
			<table style="height: 50px;" cellpadding="1" cellspacing="1">
				<tr>
					<th><h3><a href="../admin/index.php?sidebar=Bill-Watch" style="text-decoration: none;color: #000;">TẤT CẢ</a></h3></th>
					<th><h3><a href="xem-hoa-don-chua-duyet.php" style="text-decoration: none;color: #000;">ĐANG CHỜ</a></h3></th>
					<th><h3><a href="xem-hoa-don-da-duyet.php" style="text-decoration: none;color: #000;">ĐÃ XỬ LÝ</a></h3></th>
					<th><h3><a href="xem-hoa-don-da-huy.php" style="text-decoration: none;color: #000;">ĐÃ HỦY</a></h3></th>
				</tr>
			</table>
			<table border="1px" cellspacing="0" cellpadding="0">
				<tr>
					<th height="40px">Mã hóa đơn</th>
					<th>Tên khách hàng</th>
					<th>Số điện thoại</th>
					<th>Số lượng khách</th>
					<th>Ngày đặt</th>
					<th>Giờ đặt</th>
					<th>Trạng thái</th>
				</tr>
				<?php while ($bill_2=mysqli_fetch_array($result)) { ?>
					<tr>
						<td><?php echo $bill_2["MaHoaDon"] ; ?></td>
						<td><?php echo $bill_2["TenKhachHang"]?></td>
						<td><?php echo $bill_2["SDT"]?></td>
						<td><?php echo $bill_2["SoLuongKhach"] ; ?></td>
						<td><?php echo $bill_2["NgayDat"]; ?></td>
						<td><?php echo $bill_2["GioDat"]; ?></td>
						<td><?php if($bill_2["trangThai"]==0){
							echo "<span style='color:red;font-style:italic;'>ĐÃ HỦY</span>";
						} ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</body>