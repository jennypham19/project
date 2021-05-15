<?php 
	if(isset($_POST["sub"])){
		$maTL=$_POST["maTL"];
		$tenTL=$_POST["tenTL"];
		include("../../connect/open.php");
		$sql="UPDATE `the-loại` SET `maTheLoai`='$maTL',`TenTheLoai`='$tenTL' WHERE `maTheLoai`='$maTL'";
		mysqli_query($open,$sql);
		include("../../connect/close.php");
		header("Location:../index.php?sidebar=Genre-Watch");
	}
 ?>