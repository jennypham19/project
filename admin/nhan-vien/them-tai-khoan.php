<?php 
include("Location:../../phan-quyen.php");
?>
<body>
	<style type="text/css">
		.add-acount{
			position: relative;
			left:15%;
			top:-1466px;
			width:80%;
			height:100vh;
		}
		.add-acount p{
			margin-left: 100px;
		}
		.add-acount input{
			height:30px;
			border-radius:5px;
			border:solid 1px;
		}
		.add-acount button{
			width:50px;
			height:30px;
			background: #F1A573;
		}
		.add-acount h1{
			margin:20px 0px 0px 150px;
		}
		.right_1{
			position: absolute;
			top:-718px;
			left:10px;
		}
	</style>
	<div class="add-acount">
		<div class="right_1">
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
		<h1>Tài khoản</h1><br>
		<form action="nhan-vien/them-tai-khoan-process.php" method="post" name="form" onsubmit = "return(validate());">
			<p>
				<span>Tên:</span>
				<span><input type="text" name="name" id="name" size="60px"></span>
			</p><br>
			<p>
				<span>Username:</span>
				<span><input type="text" name="user" id="user" size="60px"></span>
			</p><br>
			<p>
				<span>Password:</span>
				<span><input type="password" name="pass" id="pass" size="60px"></span>
			</p><br>
			<p>
				<span>Email:</span>
				<span><input type="text" name="email" id="email" size="60px"></span>
			</p><br>
			<p>
				<span>Số điện thoại:</span>
				<span><input type="text" name="phone" id="phone" size="60px"></span>
			</p><br>
			<p>
				<span>Giới tính:</span>
				<span>
					<select name="sex">
						<option value="1">Nam</option>
						<option value="0">Nữ</option>
					</select>
				</span>
			</p><br>
			<p>
				<span>Địa chỉ:</span>
				<span><input type="text" name="address" id="address" size="60px"></span>
			</p><br>
			<p>
				<span>Quyền:</span>
				<span>
					<select name="right">
						<option value="0">Admin</option>
						<option value="1">SuperAdmin</option>
					</select>
				</span>
			</p><br>
			<p>
				<span><button type="submit" class="sub" name="sub">Thêm</button>
					<button type="reset" class="re">Xóa</button>
				</span>
			</p>
		</form>
		<script type="text/javascript">
			function validate() {
				
				if( document.form.name.value == "" ) {
					alert( "Please provide name!" );
					document.form.name.focus() ;
					return false;
				}
				if( document.form.user.value == "" ) {
					alert( "Please provide username!" );
					document.form.user.focus() ;
					return false;
				}
				if( document.form.pass.value == "" ) {
					alert( "Please provide password!" );
					document.form.pass.focus() ;
					return false;
				}
				if( document.form.email.value == "" ) {
					alert( "Please provide email!" );
					document.form.email.focus() ;
					return false;
				}
				if( document.form.phone.value == "" ) {
					alert( "Please provide phone!" );
					document.form.phone.focus() ;
					return false;
				}
				if( document.form.address.value == "" ) {
					alert( "Please provide address!" );
					document.form.address.focus() ;
					return false;
				}
				return( true );
			}
			function validateEmail() {
				var emailID = document.form.email.value;
				atpos = emailID.indexOf("@");
				dotpos = emailID.lastIndexOf(".");
				
				if (atpos < 1 || ( dotpos - atpos < 2 )) {
					alert("Please enter correct email ID")
					document.form.email.focus() ;
					return false;
				}
				return( true );
			}
		</script>
	</div>
</body>