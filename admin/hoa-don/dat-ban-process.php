<?php
ob_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_POST["fullname"]) && isset($_POST["phone"]) && isset($_POST["amount"]) && isset($_POST["date-booking"]) && isset($_POST["time-booking"])){
	$tenKH=$_POST["fullname"];
	$sdtKH=$_POST["phone"];
	$soLuong=$_POST["amount"];
	$ngayDat=$_POST["date-booking"];
	$gioDat=$_POST["time-booking"];
	include("../../connect/open.php");
	$sql="INSERT INTO `hoa-don`(`TenKhachHang`, `SDT`, `SoLuongKhach`, `NgayDat`, `GioDat`) VALUES ('$tenKH','$sdtKH','$soLuong','$ngayDat','$gioDat')";
	echo $sql;
	mysqli_query($open,$sql);
	include("../../connect/close.php");
	header("Location:hoa-don-success.php");
	ob_end_flush();
}
?>