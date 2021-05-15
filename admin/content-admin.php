<style type="text/css">
	*{
		margin:0;
		padding:0;
		box-sizing: border-box;
	}
	.content-admin{
		float:left
		width:85%;
		height:50px;
		position:relative;
	}
	.content-admin-top{
		position: absolute;
		left:15%;
		top:-725px;
		width:85%; 
		height:50px;
		background:#B4B1B1;
		
	}
	.content-admin-top svg{
		margin:5px 0px 0px 25px;
	}
	.content-admin-top a{
		text-decoration: none;
		color:#333333;
	}
	.content-admin-right{
		margin:-35px 0px 0px 1100px;
		position:absolute;
		left:200px;
		top:-675px;
		z-index:99;
	}
</style>
<body>
	<div class="content-admin">
		<div class="content-admin-top">
			<a href="../index.php?header=trang-chu"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="60px" height="36px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path d="M946.5 505L534.6 93.4a31.93 31.93 0 0 0-45.2 0L77.5 505c-12 12-18.8 28.3-18.8 45.3c0 35.3 28.7 64 64 64h43.4V908c0 17.7 14.3 32 32 32H448V716h112v224h265.9c17.7 0 32-14.3 32-32V614.3h43.4c17 0 33.3-6.7 45.3-18.8c24.9-25 24.9-65.5-.1-90.5z" fill="#626262"/></svg></a>
		</div>
		<div class="content-admin-right">
			<?php 
			ob_start();
			$name="";
			if(isset($_SESSION["fullname"])){
				$name=$_SESSION["fullname"];
				echo "Xin chào ".$name;
			}
			?>
		</div>
	</div>
</body>