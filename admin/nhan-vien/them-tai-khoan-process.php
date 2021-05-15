<?php 
	if(isset($_POST["sub"])){
		$ten=$_POST["name"];
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$sex=$_POST["sex"];
		$address=$_POST["address"];
		$right=$_POST["right"];
		include("../../connect/open.php");
		$sql="INSERT INTO `admin`(`hoten`, `userName`, `passWord`, `email`, `sdt`, `gt`, `diaChi`, `quyen`) VALUES ('$ten','$user','$pass','$email','$phone','$sex','$address','$right')";
		mysqli_query($open,$sql);
		include("../../connect/close.php");
		header("Location:../index.php?sidebar=Staff-Info");
	}
 ?>