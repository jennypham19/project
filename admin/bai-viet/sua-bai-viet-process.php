<?php 
if(isset($_POST["btn-sub"]) ) {
    $maBlog=$_POST["maBV"];
    $tieuDe=$_POST["title"];
    $img=$_FILES["img"];
    $des=$_POST["des"];
    $state=$_POST["state"];
    $tenAnh=$img["name"];
    include("../../connect/open.php");
    if($tenAnh==""){
     $sql="UPDATE `bai_viet` SET `IDBaiViet`='$maBlog', `TieuDe`='$tieuDe',`Text`='$des',`TrangThai`='$state' WHERE IDBaiViet='$maBlog'"; 
 }else{
    $duongDan="../../upload/".$tenAnh;
    move_uploaded_file($img["tmp_name"],$duongDan);
    $sql="UPDATE `bai_viet` SET `IDBaiViet`='$maBlog', `TieuDe`='$tieuDe',`AnhBlog`='$tenAnh',`Text`='$des',`TrangThai`='$state' WHERE IDBaiViet='$maBlog'" ;
}
mysqli_query($open,$sql);
include("../../connect/close.php");
header("Location:../index.php?sidebar=Blog-Watch");
}
?>