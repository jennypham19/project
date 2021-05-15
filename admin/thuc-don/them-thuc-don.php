<body>
	<script type="text/javascript" src="asset/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="asset/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="asset/ckfinder/ckfinder.js"></script>
	<style type="text/css">
		.add-menu{
			position: relative;
			left:15%;
			top:-730px;
			width:80%;
			height:100vh;
		}
		.add-menu p{
			margin-left: 30px;
		}
		.add-menu input{
			height:30px;
			border-radius:5px;
			border:solid 1px;
		}
		.add-menu button{
			margin-left: 350px;
			width:50px;
			height:30px;
			background: #F1A573;
		}
		.add-menu h1{
			margin:10px 0px 0px 100px;
		}
	</style>
	<div class="add-menu">
		<h1>Thêm thực đơn</h1>
		<form action="thuc-don/them-thuc-don-process.php" method="post" enctype="multipart/form-data" name="form" onsubmit = "return(validate());">
			<p>
				<span>Mã thể loại:</span>
				<span>
					<select name="ma-the-loai">
						<option value="1">Cơm</option>
						<option value="2">Phở</option>
						<option value="3">Bún</option>
						<option value="4">Nem</option>
						<option value="5">Chả</option>
						<option value="6">Đồ Ăn Vặt</option>
						<option value="7">Món Tráng Miệng</option>
						<option value="8">Đồ Uống</option>
						<option value="9">Lẩu</option>
					</select>
				</span>
			</p><br>
			<p>
				<span>Tên sản phẩm:</span>
				<span><input type="text" name="tensp" id="tensp" size="50px"></span>
			</p><br>
			<p>
				<span>Mô tả:</span>
				<textarea name="mota" id="mota"></textarea>
			</p><br>
			<p>
				<span>Giá:</span>
				<span><input type="text" name="gia" id="gia" size="50px"></span>
			</p><br>
			<p>
				<span>Đơn vị:</span>
				<span><input type="text" name="donvi" id="donvi" size="50px"></span>
			</p><br>
			<p>
				<span>Ảnh sản phẩm:</span>
				<span><input type="file" name="anh" id="anh" size="50px"></span>
			</p><br>
			<p><button type="submit">Thêm</button>
				<button type="reset" class="re">Xóa</button>
			</p>
		</form>
	</div>
	<script type="text/javascript">
		function validate() {

			if( document.form.tensp.value == "" ) {
				alert( "Please provide product name!" );
				document.form.tensp.focus() ;
				return false;
			}
			if( document.form.mota.value == "" ) {
				alert( "Please provide description!" );
				document.form.mota.focus() ;
				return false;
			}
			if( document.form.gia.value == "" ) {
				alert( "Please provide price!" );
				document.form.gia.focus() ;
				return false;
			}
			if( document.form.donvi.value == "" ) {
				alert( "Please provide unit!" );
				document.form.donvi.focus() ;
				return false;
			}
			if( document.form.anh.value == "" ) {
				alert( "Please provide image!" );
				document.form.anh.focus() ;
				return false;
			}
			return( true );
	}
	</script>
	<script>
		CKEDITOR.replace('mota', {
			filebrowserBrowseUrl: 'asset/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: 'asset/ckfinder/ckfinder.html?type=Images',
			filebrowserFlashBrowseUrl: 'asset/ckfinder/ckfinder.html?type=Flash',
			filebrowserUploadUrl: 'asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl: 'asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl: 'asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
		});
	</script>
</body>
</html>