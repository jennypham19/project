
<body>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<style type="text/css">
		.see-bill{
			position: relative;
			left:15%;
			top:-730px;
			width:80%;
			height:100vh;
		}
		.see-bill table{
			height:285px;
			width:100%;
			margin:50px 0px 0px 10px;
			border: solid 1px #000000;
		}
		.see-bill table th{
			background: #F1A573;
		}
		.see-bill table td{
			text-align: center;
		}
		.see-bill h1{
			margin:30px 0px 0px 10px; 
		}
	</style>
	<div class="see-bill">
		<?php 
		include("../connect/open.php");
		$sql="SELECT * FROM `hoa-don` ORDER BY NgayDat DESC";
		$result=mysqli_query($open,$sql);
		include("../connect/close.php");
		?>
		<h1>Chi tiết hóa đơn</h1>
		<table style="height: 50px;" cellpadding="1" cellspacing="1">
			<tr>
				<th><h3><a href="../admin/index.php?sidebar=Bill-Watch" style="text-decoration: none;color: #000;">TẤT CẢ</a></h3></th>
				<th><h3><a href="hoa-don/xem-hoa-don-chua-duyet.php" style="text-decoration: none;color: #000;">ĐANG CHỜ</a></h3></th>
				<th><h3><a href="hoa-don/xem-hoa-don-da-duyet.php" style="text-decoration: none;color: #000;">ĐÃ XỬ LÝ</a></h3></th>
				<th><h3><a href="hoa-don/xem-hoa-don-da-huy.php" style="text-decoration: none;color: #000;">ĐÃ HỦY</a></h3></th>
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
				<th>Tác vụ</th>
			</tr>
			<?php while ($bill=mysqli_fetch_array($result)) { ?>
				<tr id="an">
					<td><?php echo $bill["MaHoaDon"] ; ?></td>
					<td><?php echo $bill["TenKhachHang"]?></td>
					<td><?php echo $bill["SDT"]?></td>
					<td><?php echo $bill["SoLuongKhach"] ; ?></td>
					<td><?php echo $bill["NgayDat"]; ?></td>
					<td><?php echo $bill["GioDat"]; ?></td>
					<td><?php 
					if($bill["trangThai"]==""){
						echo "<span style='color:blue;font-style:italic;'>ĐANG CHỜ</span>";
					}else if($bill["trangThai"]==1){
						echo "<span style='color:#1FD262;font-style:italic;'>ĐÃ XỬ LÝ</span>";
					}else{
						echo "<span style='color:red;font-style:italic;'>ĐÃ HỦY</span>";
					}
					?></td>
					<?php 
					if($bill["trangThai"]==""){
						?>		 
						<td width="75px"><a href="hoa-don/duyet-hoa-don.php?maHD=<?php echo $bill["MaHoaDon"];?>"><button style="background: #DFC17A;">Duyệt</button></a>
							<a href="hoa-don/huy-hoa-don.php?maHD=<?php echo $bill["MaHoaDon"];?>"><button style="background: #85DAEC;">Hủy</button></a>
						</td>
						<?php
					}else{
						?>
						<td></td>
						<?php
					}
					?>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>