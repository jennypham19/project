<?php
if(isset($_GET["maTD"])){
	$ma=$_GET["maTD"];
	include("../../connect/open.php");
	$sql="DELETE FROM `product` WHERE MaSP=$ma";
	mysqli_query($open,$sql);
	include("../../connect/close.php");
	header("Location:../index.php?sidebar=Menu-Watch");
}else{
	header("Location:../index.php?sidebar=Menu-Watch");
}

?>