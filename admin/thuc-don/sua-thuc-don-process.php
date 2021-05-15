<?php 
if(isset($_POST['sub'])){
	$ma=$_POST["maTD"];
	$maTL=$_POST["ma-the-loai"];
	$tenSP=$_POST["name"];
	$des=$_POST["des"];
	$price=$_POST["gia"];
	$unit=$_POST["unit"];
	$anhSP=$_FILES["anh"];
	$tenAnh=$anhSP["name"];
	include("../../connect/open.php");
	if($tenAnh==""){
		$sql="UPDATE `product` SET `MaTheLoai`='$maTL',`TenSP`='$tenSP',`MoTa`='$des',`Gia`='$price',`donvi`='$unit' WHERE MaSP=$ma" ;
		echo $sql;
	}else{
		$duongDan="../../upload/".$tenAnh;
		move_uploaded_file($anhSP["tmp_name"],$duongDan);
		$sql="UPDATE `product` SET `MaTheLoai`='$maTL',`TenSP`='$tenSP',`MoTa`='$des',`Gia`='$price',`donvi`='$unit',`AnhSP`='$tenAnh' WHERE MaSP=$ma" ;
		echo $sql;
	}
	mysqli_query($open,$sql);
	include("../../connect/close.php");
	header("Location:../index.php?sidebar=Menu-Watch");	
}
?>

