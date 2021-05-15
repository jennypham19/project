<!DOCTYPE html>

	<?php 
		include("connect/open.php");
		$sql=mysqli_query($open,"SELECT * FROM `product`ORDER BY MaSP DESC");
		$result= mysqli_fetch_array($sql);
		$sql2=mysqli_query($open,"SELECT `IDBaiViet`, `TieuDe`, `AnhBlog`, `TrangThai`FROM `bai_viet` ORDER BY `bai_viet`.`IDBaiViet` ASC");
		include("connect/close.php");
	?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<style type="text/css" media="screen">
		* {
		  box-sizing:border-box;
		  font-family: Arial;
		}

		.slideshow-container {
		  margin: auto;
		}
		/* Ẩn các slider */
		.mySlides {
		    display: none;
		}		 
		/* định dạng các chấm chuyển đổi các slide */
		.dot {
		  cursor:pointer;
		  height: 13px;
		  width: 13px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		  position: relative;
		  bottom:45px;
		}
		/* khi được hover, active đổi màu nền */
		.active, .dot:hover {
		  background-color: #717171;
		}
		 
		/* Thêm hiệu ứng khi chuyển đổi các slide */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 3s;
		  animation-name: fade;
		  animation-duration: 3s;
		}
		 
		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}
		 
		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		/*Bố cục Thực Đơn*/
		.anh-thuc-don{
			width: 90%;
			height: 600px;
			/*background-color:#FFFF99;*/
			margin:auto; 
			text-align:center;

		}
		.dish1{
			width:33%;
			height: 100%;
			/*background-color:yellow;*/
			float:left;
			display:inline-block;
		}
		.dish2{
			width:33%;
			height: 100%;
			/*background-color:gray;*/
			float: left;
			display:inline-block;
		}
		.dish3{
			width:34%;
			height: 100%;
			/*background-color:blue;*/
			float:left;
			display:inline-block;
		}
		.nut-button-thuc-don{
			background-color:#FF9900;
			border-radius: 7px;
			padding: 7px 10px;
			text-decoration: none;
			border:1px solid #333;
		}
		.nut-button-thuc-don:hover{
			color:	#003399;
			background-color:	#FFCC33;
			text-decoration:none;
		}
		.nut-xem-them-thuc-don{
			background-color:#FF9900;
			border-radius: 7px;
			padding: 10px 15px;
			border:1px solid #333;
			text-decoration: none;
		}
		.nut-xem-them-thuc-don:hover{
			color:#003399;
			background-color:#FFCC33;
			text-decoration: none;
		}

		/*Bố cục phần hình ảnh*/
		.all{
			/*background-color:#FF99FF;*/
			height: 640px;
			width: 90%;
			margin:auto; 
			text-align:center;
		}
		.imgc1{
			width:28%;
			height: 100%;
			/*background-color:yellow;*/
			float:left;
			display:inline-block;
		}
		.imgc2{
			width:44%;
			height: 100%;
			/*background-color:red;*/
			float:left;
			display:inline-block;
		}
		.imgc2:hover{
			transform: scale(1.2,1.2);
			transition-duration:0.7s;

		}
		.imgc3{
			width:28%;
			height: 100%;
			/*background-color:blue;*/
			float:left;
			display:inline-block;
		}
		.hang1-1{
			width:100%;
			height: 50%;
			/*background-color:blue;*/
			float:left;
			display:inline-block;
		}
		.hang1-1:hover{
			transform: scale(1.2,1.2);
			transition-duration:0.7s;
		}
		.hang2-1{
			width:100%;
			height: 50%;
			/*background-color:pink;*/
			float:left;
			display:inline-block;
		}
		.hang2-1:hover{
			transform: scale(1.2,1.2);
			transition-duration:0.7s;
		}
		.hang1-3{
			width:100%;
			height: 50%;
			float:left;
			display:inline-block;
		}
		.hang1-3:hover{
			transform: scale(1.2,1.2);
			transition-duration:0.7s;
		}
		.hang2-3{
			width:100%;
			height: 50%;
			/*background-color:pink;*/
			float:left;
			display:inline-block;
		}
		.hang2-3:hover{
			transform: scale(1.2,1.2);
			transition-duration:0.7s;
		}

		/*Bố cục phần blog và món ăn đặc biệt*/
		.blog-specialfood{
			height: 700px;
			width: 100%;
		}
		.blog{
			height:100%;
			width:50%;
			background-color:#FFFFCC;
			float: left;
		}
		.specialfood{
			height:100%;
			width:50%;
			background-color:#CCCCFF;
			float: left;
		}
		.foods{
			height: 45%;
			width: 33%;
			float: right;
			text-decoration: none;
		}
		a:hover.foods{
			background-color: #FFF;
			text-decoration: none;
			border:1px solid #333;
			border-radius: 5px;
		}
		a:hover.foods h3{
			color: #FFCC00;
		}
		.anh-mon-an{
			width:80%;
			margin-left:10%;
			height: 55%;
		}
		.ten-mon-an{
			color: #111;
			margin-left: 10%;
		}
		.gia-mon-an{
			color: #111;
			margin-left: 10%;
			font-size: 15px;
		}
		#blog1{
			height:38%;
			width: 85%;
			background-color:white;
			margin:40px;
			overflow: hidden;
 			text-overflow: ellipsis;
		}
		#blog2{
			height:38%;
			width: 85%;
			background-color:white;
			margin:40px;
		}
		.noi-dung-blog {
			text-decoration: none;
			color:black;
			font-size: 8px;
			color: #333;
		}
		a:hover.noi-dung-blog {
			color:#006600;
		}
/*
		.test2 p,h3,h1 {
		  white-space: nowrap; 
		  width: 330px;
		 	color: black;
		  word-break: break-word;
		  overflow: hidden;
		  text-overflow: ellipsis;
		} */

	</style>

</head>




<body>

	<div class="slideshow-container">
	  <div class="mySlides fade">
	    <img src="IMAGES/nghe-thuat-chup-anh-mon-an-loi-cuon-03.jpg" style="width:100%;height:600px">
	  </div>
	 
	  <div class="mySlides fade">
	    <img src="IMAGES/Ảnh-2.jpg" style="width:100%;height:600px ">
	  </div>
	 
	  <div class="mySlides fade">
	    <img src="IMAGES/Ảnh-3.jpg" style="width:100%;height:600px">
	  </div>

	  <div class="mySlides fade">
	    <img src="IMAGES/Ảnh-4.jpg" style="width:100%;height:600px">
	  </div>

	  <div class="mySlides fade">
	    <img src="IMAGES/Ảnh-5.jpg" style="width:100%;height:600px">
	  </div>
	</div>
	<br>
	 
	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(0)"></span> 
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span>
	  <span class="dot" onclick="currentSlide(4)"></span>
	</div>
		<!-- Thực đơn  -->
	<h1 style="text-align:center;color:#888888">THỰC ĐƠN</h1><br>
	<p style="font-size: larger;text-align:center;">
		Cùng khám phá nét độc đáo của nhà hàng chúng tôi với những món ăn đa dạng, hấp dẫn.Chúng tôi đảm bảo quý khách sẽ cảm thấy hài lòng khi thưởng thức món ăn tại nhà hàng.</p><br>

		<!-- Bố cục thực đơn -->
	<div class="anh-thuc-don">
		<div class="dish1" >
			<img src="IMAGES/Ảnh-6.jpg" alt="Ảnh nem" height="350px" width="370px">
			<h2 style="color:#003333;">Nem Việt</h2>
			<div style="font-size: 15px">Không phải ngẫu nhiên mà các món Cuốn và Nem Việt lại được yêu thích đến vậy. Với sự kết hợp của miếng nem hay món cuốn với nước chấm được nêm nếm vừa vị, đây sẽ là món ăn phù hợp trong các dịp khác nhau, vừa ngon, vừa đảm bảo đầy đủ chất dinh dưỡng cần thiết.</div><br><br>
				<a class="nut-button-thuc-don" href="index.php?header=thuc-don&TL=Nem">Xem món</a>
		</div>
		
		<div class="dish2">
			<img src="IMAGES/Ảnh-7.jpg" alt="Ảnh lẩu" height="350px" width="370px">
			<h2 style=" color:#003333;">Lẩu Việt</h2>
			<div style="font-size: 15px">Lẩu Việt là sự kết hợp những nguyên liệu đa dạng, gia vị dân dã đã góp phần làm cho bức tranh ẩm thực Việt thêm phần trọn vẹn. Một đĩa rau thơm phức hay nước lẩu ngọt lịm, hòa trộn những gia vị độc đáo để lại trong lòng thực khách những ấn tượng khó phai về một phong vị thuần Việt.</div><br><br>
				<a class="nut-button-thuc-don" href="index.php?header=thuc-don&TL=Lẩu">Xem món</a>
		</div>

		<div class="dish3">
			<img src="IMAGES/ẢNh-8.jpg" alt="Ảnh Phở" height="350px" width="370px">
			<h2 style="color:#003333;">Phở Việt</h2>
			<div style="font-size: 15px">Trong tiềm thức của người hoài cổ, Bún là tiếng bát đũa lạch cạch, là tiếng xì xèo nóng hổi, là tiếng cười đùa của kẻ bán người mua. là món ăn ấm lòng mỗi buổi sớm mai. Ai đã từng đến Việt Nam, đã từng yêu quý con người Việt, hẳn đã “phải lòng” món bún dân dã nơi góc phố Việt.</div><br><br>
				<a class="nut-button-thuc-don" href="index.php?header=thuc-don&TL=Phở">Xem món</a>
		</div> 
			<a class="nut-xem-them-thuc-don" href="index.php?header=thuc-don"> Xem thêm </a>
	</div>	<br><br><br><br>


<!-- Bố cục phần hình ảnh -->
		<h2 style="color:#003333;text-align:center;">HÌNH ẢNH</h2>
		<div class="all">
			<div class="imgc1">
				<div class="hang1-1"><img src="IMAGES/Ảnh-9.jpg" width="336px" height="320px"></div>
				<div class="hang2-1"><img src="IMAGES/Ảnh-10.jpg" width="336px" height="320px"></div>
			</div>
			<div class="imgc2"><img src="IMAGES/Ảnh-12.jpg" width="527px" height="640px"></div>
			<div class="imgc3">
				<div class="hang1-3"><img src="IMAGES/Ảnh-11.jpg" width="336px" height="320px"></div>
				<div class="hang2-3"><img src="IMAGES/Ảnh-15.jpg" width="336px" height="320px"></div>
			</div>
		</div> <br><br><br><br>


	<!-- Bố cục blog và những món ăn đặc biệt	 -->
		<div class="blog-specialfood">
			<div class="blog">
				<h2 style="text-align:center;">BLOG</h2>
				<?php $i=0; ?>
				<?php while($result2= mysqli_fetch_array($sql2)){
				if($i++<2){ ?>
				<div id="blog1">
					<div style="height: 10px;"></div>
					<div style="width: 40%; height: 100%; float: left;">
						<img src="IMAGES/<?php echo $result2['AnhBlog'] ?>" width="200px" height="200px">
					</div>
					<div style="width: 60%; float: left;">
						<a href="index.php?header=blog&id=<?php echo $result2["TieuDe"]?>#<?php echo $result2['IDBaiViet'] ?>" class="noi-dung-blog"><?php echo $result2['TieuDe']; ?></a>
					</div>	
				</div>
				<?php }} ?>
<!-- 				<div id="blog2">
					<div style="width: 40%; height: 100%; float: left;">
						<img src="IMAGES/Ảnh-17.png" width="200px" height="200px">
					</div>
					<div style="width: 60%; height: 100%; float: left;">
						<a href="index.php?header=blog" class="tieu-de-blog"><h4>CHẢ CÁ LÃ VỌNG... ĂN Ở ĐÂU NGON VÀ CHUẨN VỊ HÀ NỘI NHẤT?</h4></a>
						<p style="font-size:14px">Chả cá Lã vọng là một món ăn tinh tế, dân dã của người Hà Thành đã được báo chí và các trang ẩm thực hàng đầu trên thế giới ca ngợi là món ăn chắc chắn phải thử một lần trong đời. Hãy đến Chả cá Hà Thành để thưởng thức chả cá chính gốc nhất...</p>
					</div>
				</div> -->
				
			</div>
			<div class="specialfood">
				<h2 style="text-align:center;">MỘT SỐ MÓN ĂN</h2><br><br>
				<?php
				$i=0;
				 while ($result= mysqli_fetch_array($sql)){
				?>	
				<a class="foods" href="index.php?header=chi-tiet&id=<?php echo $result["MaSP"]?>">
					<br><img src="IMAGES/<?php echo $result['AnhSP']; ?>" class="anh-mon-an"><br><br>
					<h3 class="ten-mon-an"><?php echo $result['TenSP']; ?></h3><br>
					<h3 class="gia-mon-an">Giá: <?php echo number_format($result= mysqli_fetch_array($sql)['Gia']);?> VNĐ </h3> <br>
				</a>
				<?php
					if(++$i>5)break;
				} ?>
			</div>
		</div>
</body>	


	<script>
	  //khai báo biến slideIndex đại diện cho slide hiện tại
	  var slideIndex;
	  // KHai bào hàm hiển thị slide
	  function showSlides() {
	      var i;
	      var slides = document.getElementsByClassName("mySlides");
	      var dots = document.getElementsByClassName("dot");
	      for (i = 0; i < slides.length; i++) {
	         slides[i].style.display = "none";  
	      }
	      for (i = 0; i < dots.length; i++) {
	          dots[i].className = dots[i].className.replace(" active", "");
	      }
	 
	      slides[slideIndex].style.display = "block";  
	      dots[slideIndex].className += " active";
	      //chuyển đến slide tiếp theo
	      slideIndex++;
	      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
	      if (slideIndex > slides.length - 1) {
	        slideIndex = 0
	      }    
	      //tự động chuyển đổi slide sau 5s
	      setTimeout(showSlides, 3000);
	  }
	  //mặc định hiển thị slide đầu tiên 
	  showSlides(slideIndex = 0);
	 
	 
	  function currentSlide(n) {
	    showSlides(slideIndex = n);
	  }
</script>
</html>