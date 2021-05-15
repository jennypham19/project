<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đặt bàn 1</title>
	<link rel="stylesheet" type="text/css" href="style/css/Dat-ban.css">
</head>
<body>
	<div class="all">
		<div class="header-dat-ban">
			<a href="index.php?header=trang-chu">Home</a> <span>/ Đặt bàn </span>
			<p>Đặt bàn</p>
		</div>
		<div class="content">
			<div class="img-store">
				<img src="IMAGES/Ảnh-23.jpg" style="margin:30px 0 0 30px; width: 95%; height:750px;"><br><br>
				<p style="margin-left: 30px">Vui lòng cho chúng tôi biết yêu cầu của bạn.</p><br>
			</div>
			<div class="form-dat-ban">
				<form action="admin/hoa-don/dat-ban-process.php" method="post" class="form" id="form-1">
					<p>(Vui lòng đặt bàn trước 12h)</p>
					<div class="form-group">
						<label for="fullname" class="form-label">Tên đầy đủ *</label>
						<input id="fullname" name="fullname" type="text" class="form-control">
						<span class="form-message"></span>
					</div>
					<div class="form-group">
						<label for="phone" class="form-label">Số điện thoại *</label>
						<input id="phone" name="phone" type="number" class="form-control">
						<span class="form-message"></span>
					</div>
					<div class="form-group">
						<label for="email" class="form-label">Email</label>
						<input id="email" name="email" type="text" class="form-control">
						<span class="form-message"></span>
					</div>
					<div class="form-group">
						<label for="date-booking" class="form-label">Ngày đặt bàn *</label>
						<input id="date-booking" name="date-booking" type="date" class="form-control">
						<span class="form-message"></span>
					</div>
					<div class="form-group">
						<label for="time-booking" class="form-label">Giờ đặt bàn *</label>
						<input id="time-booking" name="time-booking" type="time" class="form-control">
						<span class="form-message"></span>
					</div>
					<div class="form-group">
						<label for="amount" class="form-label">Số lượng khách *</label>
						<input id="amount" name="amount" type="number" class="form-control">
						<span class="form-message"></span>
					</div>
					<div class="form-group">
						<label for="note" class="form-label">Ghi chú</label>
						<textarea name="note" id="note" class="form-control" style="width: 402px; height: 115px;"></textarea>
					</div>
					<button class="form-submit" name="dat" id="dat">Submit</button>
				</form>
				
			</div>
		</div>
	</div>
	<script src="style/js/dat-ban.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
        // Mong muốn của chúng ta
        Validator({
        	form: '#form-1',
        	formGroupSelector: '.form-group',
        	errorSelector: '.form-message',
        	rules: [
        	Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ'),
        	Validator.isEmail('#email'),
        	Validator.isRequired('#phone','Vui lòng nhập số điện thoại'),
        	Validator.isTel('#phone','Trường này phải là số điện thoại bắt đầu từ 09|03|05|07 và có 10 chữ số'),
        	Validator.isRequired('#date-booking','Bạn phải điền vào trường này'),
        	Validator.isRequired('#time-booking','Bạn phải điền vào trường này'),
        	Validator.isRequired('#amount', 'Bạn phải điền vào trường này'),
        	Validator.isCustomer('#amount',50,'Số lượng khách không được vượt quá 50'),
        	],
        });
    });
</script>
</body>
</html>