<body>
	<style type="text/css">
		.right{
			position: relative;
			left:15%;
			top:-710px;
			width:80%;
			height:100vh;
		}
	</style>
	<div class="right">
		<?php
		if (isset($_SESSION['admin']) == false) {
			header('Location:../dang-nhap.php');
		}else {
			if (isset($_SESSION['right']) == true) {
				$permission = $_SESSION['right'];
				if ($permission == '0') {
					echo "Bạn không đủ quyền truy cập vào trang này<br>";
					echo "<a href='index.php?sidebar=Menu-Watch'> Click để về lại trang chủ</a>";
					exit();
				}
			}
		}
		?>
	</div>
</body>