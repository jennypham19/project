<?php
if (isset($_GET["maHD"])) {
  $maHoaDon = $_GET["maHD"];
  include("../../connect/open.php");
  $sql = "UPDATE `hoa-don` SET trangThai=1 WHERE MaHoaDon=$maHoaDon";
  echo $sql;
  mysqli_query($open, $sql);
  include("../../connect/close.php");
  header("Location:xem-hoa-don-da-duyet.php");
} else {
  header("Location:xem-hoa-don-da-duyet.php");
}