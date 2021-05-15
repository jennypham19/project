<?php 
session_start();
if (isset($_SESSION["admin"])) {
	header("Location:index.php");
} else {
	if (isset($_COOKIE["user"])) {
		$user = $_COOKIE["user"];
		$pass = $_COOKIE["pass"];
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../style/css/dang-nhap.css">
</head>
<body>
	<div class="login-wrap" >
		<form action="dang-nhap-process.php" method="post" class="form" id="form" name="form" onsubmit = "return(validate());">
			<h2>Đăng nhập</h2>
			<div class="input-group">
				<input type="text" name="user" id="user" value="<?php if(isset($_COOKIE["user"])){
					echo $user;
				}?>">
				<label for="user">Tên đăng nhập</label>
			</div>
			<div class="input-group"> 
				<input type="password" name="pass" id="pass" value="<?php if(isset($_COOKIE["pass"])){
					echo $pass;
				}?>">
				<label for="pass">Mật khẩu</label>
			</div>
			<input type="checkbox" name="note" <?php
			if (isset($_COOKIE["user"])) {
				echo "checked";
			}
			?>>Ghi nhớ<br><br>
			<?php 
			if(isset($_GET["err"])){
				echo "Sai tài khoản hoặc mật khẩu<br>";
			}
			?>
			<br><input type="submit" value="Đăng nhập" class="button">
		</form>
	</div>
	<script>
		function validate() {

			if( document.form.user.value == "" ) {
				alert( "Please provide your username!" );
				document.form.user.focus() ;
				return false;
			}
			if( document.form.pass.value == "" ) {
				alert( "Please provide your password!" );
				document.form.pass.focus() ;
				return false;
			}
			return( true );
	}
</script>
</body>
</html>