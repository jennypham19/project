<?php 
session_start();
if(isset($_POST["user"]) && isset($_POST["pass"])){
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	include("../connect/open.php");
	$sql="SELECT * FROM admin WHERE userName='$user' AND passWord='$pass'";
	$result=mysqli_query($open,$sql);
	$check=mysqli_num_rows($result);
	include("../connect/close.php");
	if($check==0){
		header("Location:dang-nhap.php?err=1");
	}else{
		while ($data=mysqli_fetch_array($result)) {
			$_SESSION["id"]=$data["ma"];
			$_SESSION["fullname"]=$data["hoten"];
			$_SESSION["email"]=$data["email"];
			$_SESSION["sdt"]=$data["sdt"];
			$_SESSION["sex"]=$data["gt"];
			$_SESSION["add"]=$data["diaChi"];
			$_SESSION["right"]=$data["quyen"];
			$_SESSION["status"]=$data["trangThai"];
		}
		$_SESSION["admin"]=$user;
		if (isset($_POST["note"])) {
			setcookie("user", $user, time() + 84600 * 2);
			setcookie("pass", $pass, time() + 84600 * 2);
		} else {
			setcookie("user", $user, time() - 100);
			setcookie("pass", $pass, time() - 100);
		}
		header("Location:index.php");
		
	}
}
?>