<?php
ob_start();
if (!isset($_SESSION["admin"])) {
	// header("Location:dang-nhap.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script type="text/javascript" src="../style/js/admin.js"></script>
</head>
<body>
	<div class="content-admin-bottom"></div>
</body>
</html>