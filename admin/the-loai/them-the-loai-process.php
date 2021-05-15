<?php 
	if (isset($_POST["sub"])) {
		$maTL=$_POST["maTL"];
		$tenTL=$_POST["tenTL"];
		include("../../connect/open.php");
		$sql="INSERT INTO `the-loại`(`maTheLoai`, `TenTheLoai`) VALUES ('$maTL','$tenTL')";
		echo $sql;
		mysqli_query($open,$sql);
		include("../../connect/close.php");
		header("Location:../index.php?sidebar=Genre-Watch");
	}
 ?>