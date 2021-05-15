<?php 
	$con=mysqli_connect("localhost","root","","project1");
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql1="SELECT * FROM `the-loại` INNER JOIN `product` ON `product`.MaTheLoai = `the-loại`.maTheLoai WHERE MaSP='$id'";
		$result1=mysqli_query($con,$sql1);
		$trans=mysqli_fetch_assoc($result1);
	}
	mysqli_close($con);

?>
</b>
<style type="text/css">
		*{
			font-family:sans-serif;
		}
		.header-thuc-don {
			width: 100%;
			height: 70px;
			background-color:#DDDDDD;
			margin:0 0 30px 0;
		}
		.home{
			margin-left: 30px;
		}
		.header-thuc-don a{
			display: inline-block;
			text-decoration: none;     
			color:black;
			line-height: 30px;
			font-size:13px;
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
			color: #660000;
		}
		.chi-tiet{
			width: 90%;
			margin-left:5%;
		}
		.anhsp{
			margin-left: 25%;
		}
		.tensp{
			font-size: 28px;
			color: #006600;
		}
		.gia{
			color: #006600;
		}
/*		.related{
			font-size: 20px;
		}
		.bailq{
			width: 22.7%;
			background-color: yellow;
			display: inline-block;
			margin-right: 2%;
		}*/
</style>
<div style="  margin-top: 80px;">
	<div class="header-thuc-don">
		<a href="index.php?header=trang-chu" class="home"> Home </a> <a href="index.php?header=thuc-don&TL=<?=$trans['TenTheLoai']?>"> / <?php echo $trans["TenTheLoai"]?> </a><span> / <?php echo $trans["TenSP"]?></span>
		<p><?php echo $trans["TenSP"]?></p>
	</div>
	<div class="chi-tiet">
		<img src="./IMAGES/<?php echo $trans['AnhSP'] ?>" class="anhsp" style="height:600px;width: 600px"><br><br>
		<p class="tensp"><?php echo $trans['TenSP'] ?></p><br>
		<h3 class="gia">Giá: <?php echo number_format($trans['Gia'])?> VNĐ / <?php echo $trans['donvi']; ?> </h3> <br>
		<?php echo  $trans['MoTa']?><br><br>
		<hr>
<!-- 		<div class="related-posts" style="background-color: brown">
			<p class="related">RELATED POSTS</p>
			<a href="#" class="bailq">1</a>
			<a href="#" class="bailq">2</a>
			<a href="#" class="bailq">3</a>
			<a href="#" class="bailq">4</a>
		</div> -->
	</div>	
</div>