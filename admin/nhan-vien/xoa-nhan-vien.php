<?php
session_start();
if(isset($_GET["ma"])){
	$ma=$_GET["ma"];
	$test= $_SESSION['admin'];
	include("../../connect/open.php");
	$sql1="SELECT * FROM `admin` WHERE userName='$test'";
	$run=mysqli_query($open,$sql1);
	$tran=mysqli_fetch_array($run);
	$id= $tran['ma'];
	if($id!=$ma){
		$sql="DELETE FROM `admin` WHERE ma=$ma";
		mysqli_query($open,$sql);
		header("Location:../index.php?sidebar=Staff-Info");
		include("../../connect/close.php");
	}else{
		header("Location:../index.php?sidebar=Staff-Info&erro=1");
	}	
}else{
	header("Location:../index.php?sidebar=Staff-Info");
	
}
?>