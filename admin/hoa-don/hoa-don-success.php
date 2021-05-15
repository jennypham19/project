<link rel="stylesheet" type="text/css" href="../../style/css/header.css">
<link rel="stylesheet" type="text/css" href="../../style/css/footer.css">
	<style type="text/css">
		.register-bill{
			background: #D5CFCF;
			width:100%;
			height:100%;
			position: relative;
		}
		.register-bill-text{
			width:570px;
			height:1000px;
		}
		.register-bill-text img {
			margin:150px 0px 0px 415px;
		}
		.register-bill-text table{
			position: absolute;
			bottom:100px;
			left:467px;
		}
		.come-back {
			outline: none;
			background-color: #FF9933;
			margin:90px 0px 0px 670px;
			padding: 12px 16px;
			font-weight: 600;
			color: #fff;
			border: none;
			width: 20%;
			font-size: 14px;
			border-radius: 8px;
			cursor: pointer;
		}

		.come-back a{
			text-decoration: none;
			margin-left: 15px;
		}
		.come-back:hover {
			background-color: #F1A573;
		}
	</style>
</head>
<body>
	<?php include("../../header.php"); ?>
	<div class="register-bill">
		<div class="register-bill-text">
			<img src="../../IMAGES/bg2.jpg" width="650px" height="400px">
			<table border="0px" cellspacing="0" cellpadding="0">
				<tr>
					<td><h1>Chúc mừng bạn đã đặt bàn thành công!</h1></td>
				</tr>
			</table>
			<div class="come-back"><a href="../../index.php?header=trang-chu">Quay lại</a></div>
		</div>
	</div>
	<?php include("../../footer.php"); ?>
</body>
</html>