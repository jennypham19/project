<?php
	if(isset($_POST["sub"])) {
		$tieuDe=$_POST["tieuDe"];
		$img=$_FILES["anh"];
		$des=$_POST["noiDung"];
		$trThai=$_POST["state"];
	    $tenAnh=$img["name"];
		$duongDan="../../upload/".$tenAnh;
		move_uploaded_file($img["tmp_name"],$duongDan);
		include("../../connect/open.php");
		$sql="INSERT INTO `bai_viet`(`TieuDe`, `AnhBlog`, `Text`, `TrangThai`) VALUES ('$tieuDe','$tenAnh','$des','$trThai')";
		mysqli_query($open,$sql);
		include("../../connect/close.php");
		header("Location:../index.php?sidebar=Blog-Watch");
	}
?>
