<body>
	<style type="text/css">
		.profile-staff{
			position: relative;
			left:15%;
			top:-715px;
			width:80%;
			height:100vh;
		}
		.profile-staff table{
			height:285px;
			width:100%;
			margin:50px 0px 0px 10px;
			border: solid 1px #000000;
		}
		.profile-staff table th{
			background: #F1A573;
		}
		.profile-staff table td{
			text-align: center;
		}
		.profile-staff h1{
			margin:30px 0px 0px 10px; 
		}
		.right{
			position: absolute;
			top:0px;
			left:10px;
		}
	</style>
	<div class="profile-staff">
		<div class="right">
			<?php 
			if (isset($_SESSION['admin'])==true && isset($_SESSION['right']) == true) {
				$permission = $_SESSION['right'];
				if ($permission == '0') {
					echo "Bạn không đủ quyền truy cập vào trang này<br>";
					echo "<a href='index.php?sidebar=Menu-Watch'> Click để về lại trang chủ</a>";
					exit();
				}
			}
			?>
		</div>
		<?php 
		include("../connect/open.php");
		$sql="SELECT * FROM admin";
		$result=mysqli_query($open,$sql);
		include("../connect/close.php");
		?>
		<h1>Thông tin tài khoản</h1>
		<table border="1px" cellspacing="0" cellpadding="10px">
			<tr>
				<th>Mã admin</th>
				<th>Tên admin</th>
				<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Số điện thoại</th>
				<th>Giới tính</th>
				<th>Địa chỉ</th>
				<th>Quyền</th>
				<th>Tác vụ</th>
			</tr>
			<?php while ($staff=mysqli_fetch_array($result)) { ?>
				<tr>
					<td><?php echo $staff["ma"] ; ?></td>
					<td><?php echo $staff["hoten"] ; ?></td>
					<td><?php echo $staff["userName"]; ?></td>
					<td><?php echo $staff["passWord"]; ?></td>
					<td><?php echo $staff["email"];?></td>
					<td><?php echo $staff["sdt"];?></td>
					<td><?php if($staff["gt"]==0){
						echo "Nữ";
					}else{
						echo "Nam";
					}?></td>
					<td><?php echo $staff["diaChi"];?></td>
					<td><?php if($staff["quyen"]==1){
						echo "SuperAdmin";
					}else{
						echo "Admin";
					}?></td>
					<td>
						<span style="margin-left: 10px;"><a href="nhan-vien/sua-nhan-vien.php?ma=<?php echo $staff["ma"]?>"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 758 666"><path d="M558 554V425l80-80v235c0 47-39 86-85 86H85c-47 0-85-39-85-86V113c0-47 38-86 85-86h475v1l-80 79H112c-17 0-32 15-32 33v414c0 18 15 32 32 32h414c17 0 32-14 32-32zm76-488l85 85l39-39l-85-85zM335 366l84 85l271-271l-84-85zm-60 144l116-31l-85-85z" fill="#626262"/></svg></a></span>
						<span><a href="nhan-vien/xoa-nhan-vien.php?ma=<?php echo $staff["ma"]?>" onclick="return confirm('Bạn có muốn xóa?')" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#626262" d="M13.41 12l4.3-4.29a1 1 0 1 0-1.42-1.42L12 10.59l-4.29-4.3a1 1 0 0 0-1.42 1.42l4.3 4.29l-4.3 4.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l4.29-4.3l4.29 4.3a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42z"/></svg></a></span>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>

</body>
<?php if(isset($_GET['erro'])&&$_GET['erro']==1){ ?>
	<script>
		window.alert("Bạn không thể xóa chính tk của mình!!");
	</script>
	<?php } ?>