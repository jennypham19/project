<?php
if(isset($_GET["maBV"])){
	$ma=$_GET["maBV"];
	include("../../connect/open.php");
	$sql="DELETE FROM `bai_viet` WHERE IDBaiViet=$ma";
	mysqli_query($open,$sql);
	include("../../connect/close.php");
	header("Location:../index.php?sidebar=Blog-Watch");
}else{
	header("Location:../index.php?sidebar=Blog-Watch");
}

?>