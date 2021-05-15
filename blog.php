<?php 
    $con= mysqli_connect("localhost","root","","project1");
	$sql= "SELECT * FROM `bai_viet`";
	$result= mysqli_query($con,$sql);
	mysqli_close($con);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog</title>
</head>
<style>
		.header-thuc-don {
			width: 100%;
			height: 70px;
			background-color:#DDDDDD;
			margin:80px 0 30px 0;
		}
		.header-thuc-don a{
			text-decoration: none;     
			color:black;
			line-height: 30px;
			font-size:13px;
			margin-left:30px;
		}
		.header-thuc-don a:hover{
			text-decoration:underline;
			color: 	#006600;
		}
		.header-thuc-don span{
			color:black;
			line-height: 30px;
			font-size:13px;
		}
		.header-thuc-don p{
			font-size: 30px;
			margin: 0px 0 0 30px;
		}
	.blog{
		width: 80%;
		margin-left: 10%;
	}
	.content h3{
		color: #222;
		
	}
	.content{
		width: 70%;
		float: left;
	}
	.related-blog{
		width: 20%;
		margin top:100px;
		float:left;
		margin-left:5%;
		position: fixed;
		right: 80px;
		border: 1px solid #333;
		padding: 20px;
		background-color:#FFFFCC;
	}
	.title {
		list-style: none;
	}
	.title a {
		display: block;
		text-decoration: none;
		color: #444;
		font-size: 7px;
		text-transform: uppercase;
		border-top: 1px solid #333;
		padding:20px;
	}
	.title a:hover{
		color:#F1A573;
		border-top:1px solid #F1A573;
	}
</style>
<body>
	<div class="header-thuc-don">
		<a href="index.php?header=trang-chu">Home</a> <span>/ Blog </span>
		<p>Blog</p>
	</div>
	<div class="all">
		<div class="content"><?php 
	        while ($blog=mysqli_fetch_array($result)) { ?>
	        	<div class="blog" id="<?php echo $blog['IDBaiViet']?>"> <?php echo $blog['TieuDe']; ?> <?php echo $blog["Text"]; ?></div> <br>
	         	<hr>
	         	<br><br><br>   
	    <?php } ?>
		</div>
		<?php      
			$con= mysqli_connect("localhost","root","","project1");
			$sql1= "SELECT * FROM `bai_viet`";
			$result1= mysqli_query($con,$sql);
			mysqli_close($con);
		?>
		<div class="related-blog">
			<p style="font-size:20px;font-weight: 550;color: #444;text-align: center;padding-bottom: 10px;">  BÀI VIẾT LIÊN QUAN </p>
			<ul class="title">
				<?php $i=0 ?>
				<?php while ($trans=mysqli_fetch_array($result1)){
					if($i++<5){
					?>
				<li><a href="#<?php echo $trans['IDBaiViet'] ?> "><?php echo $trans['TieuDe']?></a></li>
			<?php }} ?>
			</ul>
		</div>
	</div>
</body>
</html>