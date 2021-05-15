<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm Bài Viết</title>
	<script type="text/javascript" src="asset/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="asset/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="asset/ckfinder/ckfinder.js"></script>
</head>
<body>
	<style type="text/css">
		.blog-add{
			position: relative;
			left:15%;
			top:-730px;
			width:80%;
			height:100vh;
		}
		.blog-add p{
			margin-left: 30px;
		}
		.blog-add input{
			height:30px;
			border-radius:5px;
			border:solid 1px;
		}
		.blog-add button{
			margin-left: 250px;
			width:50px;
			height:30px;
			background: #F1A573;
		}
		.blog-add h1{
			margin:10px 0px 0px 50px;
		}
	</style>
	<div class="blog-add">
		<h1>Thêm bài viết</h1>
		<form action="bai-viet/them-bai-viet-process.php" name="form" method="post" enctype="multipart/form-data" onsubmit = "return(validate());">
			<p>
				<span>Tiêu đề:</span>
				<span><input type="text" name="tieuDe" id="tieuDe" size="87px"></span>
			</p><br>
			<p>
				<span>Ảnh sản phẩm:</span>
				<span><input type="file" name="anh" id="anh" size="87px"></span>
			</p><br>
			<p>
				<span>Mô tả:</span>
				<span><textarea name="noiDung" id="noiDung"></textarea></span>
			</p>
			<p>
				<span>Trạng thái:</span>
				<span>
					<select name="state">
						<option value="0">Hiện</option>
						<option value="1">Ẩn</option>
					</select>
				</span>
			</p><br>
			<p>
				<span><button type="submit" name="sub">Thêm</button>
						<button type="reset" class="re">Xóa</button>
				</span>
			</p>	
		</form>
	</div>
</div>
<script type="text/javascript">
	function validate() {
         if( document.form.tieuDe.value == "" ) {
            alert( "Please provide title!" );
            document.form.tieuDe.focus() ;
            return false;
         }
         if( document.form.anh.value == "" ) {
            alert( "Please provide image!" );
            document.form.anh.focus() ;
            return false;
         }
         if( document.form.noiDung.value == "" ) {
            alert( "Please provide content!" );
            document.form.noiDung.focus() ;
            return false;
         }
         return( true );
      }
 </script>
 <script>
	CKEDITOR.replace('noiDung', {
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