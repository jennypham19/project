<?php
	if(isset($_POST["ma-the-loai"]) && isset($_POST["tensp"]) && isset($_POST["mota"]) && isset($_POST["gia"]) && isset($_POST["donvi"]) && isset($_FILES["anh"])) {
		$maTL=$_POST["ma-the-loai"];
		$tenSP=$_POST["tensp"];
		$des=$_POST["mota"];
		$price=$_POST["gia"];
		$unit=$_POST["donvi"];
		$img=$_FILES["anh"];
		$tenAnh=$img["name"];
		$duongDan="../../upload/".$tenAnh;
		move_uploaded_file($img["tmp_name"],$duongDan);
		include("../../connect/open.php");
		$sql="INSERT INTO `product`(`MaTheLoai`, `TenSP`, `MoTa`, `Gia`, `donvi`, `AnhSP`) VALUES ('$maTL','$tenSP','$des','$price','$unit','$tenAnh')";
		mysqli_query($open,$sql);
		include("../../connect/close.php");
		header("Location:../index.php?sidebar=Menu-Watch");
	}
?>
