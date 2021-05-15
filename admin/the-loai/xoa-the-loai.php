<?php
if(isset($_GET["maTL"])){
	$ma=$_GET["maTL"];
	include("../../connect/open.php");
	$sql="DELETE FROM `the-loại` WHERE maTheLoai='$ma'";
	echo $sql;
	mysqli_query($open,$sql);
	include("../../connect/close.php");
	header("Location:../index.php?sidebar=Genre-Watch");
}else{
	header("Location:../index.php?sidebar=Genre-Watch");
}

?>