<body>
	<style type="text/css">
		.add-genre{
			position: relative;
			left:15%;
			top:-730px;
			width:80%;
			height:100vh;
		}
		.add-genre p{
			margin-left: 30px;
		}
		.add-genre input{
			height:30px;
			border-radius:5px;
			border:solid 1px;
		}
		.add-genre button{
			margin-left: 230px;
			width:50px;
			height:30px;
			background: #F1A573;
		}
		.add-genre h1{
			margin:10px 0px 0px 100px;
		}
	</style>
	<div class="add-genre">
		<h1>Thêm thể loại</h1>
		<form action="the-loai/them-the-loai-process.php" method="post" name="form" onsubmit = "return(validate());">
			<p>
				<!-- <span>Mã thể loại:</span> -->
				<span><input type="hidden" name="maTL" id="ma-TL" size="50px"></span>
			</p><br>
			<p>
				<span>Tên thể loại:</span>
				<span><input type="text" name="tenTL" id="ten-TL" size="50px"></span>
			</p><br>
			<p><button type="submit" name="sub">Thêm</button>
				<button type="reset" class="re">Xóa</button>
			</p>
		</form>
	</div>
	<script type="text/javascript">
		function validate() {

			// if( document.form.maTL.value == "" ) {
			// 	alert( "Please provide genre id!" );
			// 	document.form.maTL.focus() ;
			// 	return false;
			// }
			if( document.form.tenTL.value == "" ) {
				alert( "Please provide genre name!" );
				document.form.tenTL.focus() ;
				return false;
			}
			return( true );
	}
	</script>
</body>
</html>