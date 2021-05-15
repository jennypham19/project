<?php 
	if(isset($_POST["btn-sub"])){
		$ma=$_POST["ma"];
		$ten=$_POST["fullname"];
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$sex=$_POST["sex"];
		$right=$_POST["right"];
		$address=$_POST["address"];
		include("../../connect/open.php");
		$sql="UPDATE `admin` SET `ma`=$ma,`hoten`='$ten',`userName`='$user',`passWord`=$pass,`email`='$email',`sdt`=$phone,`gt`=$sex,`diaChi`='$address',`quyen`=$right WHERE ma=$ma";
		echo $sql;
		mysqli_query($open,$sql);
		include("../../connect/close.php");
		header("Location:../index.php?sidebar=Staff-Info");
	}
 ?>