<?php
if (isset($_GET["maBV"])) {
  $ma = $_GET["maBV"];
  include("../../connect/open.php");
  $sql = "SELECT * FROM bai_viet WHERE IDBaiViet=$ma";
  $result = mysqli_query($open, $sql);
  $blog = mysqli_fetch_array($result);
  include("../../connect/close.php");
}
?>
<body>
  <script type="text/javascript" src="../asset/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../asset/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="../asset/ckfinder/ckfinder.js"></script>
  <style type="text/css">
    .edit-blog{
      position: relative;
      left:15%;
      top:-730px;
      width:80%;
      height:100vh;
    }
    .edit-blog p{
      margin-left: 30px;
    }
    .edit-blog input{
      height:30px;
      border-radius:5px;
      border:solid 1px;
    }
    .edit-blog button{
      margin-left: 250px;
      width:50px;
      height:30px;
      background: #F1A573;
    }
    .edit-blog h1{
      margin:20px 0px 0px 50px;
    }
  </style>
  <?php  
  include("../side-bar.php");
  include("../content-admin.php");
  ?>
  <div class="edit-blog">
    <h1>Chỉnh sửa bài viết</h1>
    <form action="sua-bai-viet-process.php" method="post" enctype="multipart/form-data">
      <p>
        <span><input type="text" name="maBV" id="maBV" size="50px" value="<?php echo $blog["IDBaiViet"]; ?>"></span>
      </p>
      <p>
        <span>Tiêu đề:</span>
        <span><input type="text" name="title" id="title" size="50px" value="<?php echo $blog["TieuDe"]; ?>"></span>
      </p><br>
      <p>
        <span>Ảnh bài viết:</span>
        <span> <img src="../../IMAGES/<?php echo $blog['AnhBlog']?>" alt="" width="100px" height="100px"><input type="file" name="img" id="img" size="50px" value=""></span>
      </p><br>
      <p>
        <span>Mô tả:</span>
        <span><textarea name="des" id="des"><?php echo $blog["Text"]?></textarea></span>
      </p><br>
      <p>
        <span>Trạng thái:</span>
        <span><input type="text" name="state" id="state" size="50px" value="<?php echo $blog["TrangThai"]; ?>"></span>
      </p><br>   
      <p>
        <span><button class="sub" type="submit" name="btn-sub">Sửa</button></span>
      </p>
    </form>
  </div>
  <script>
    CKEDITOR.replace('des', {
      filebrowserBrowseUrl: '../asset/ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl: '../asset/ckfinder/ckfinder.html?type=Images',
      filebrowserFlashBrowseUrl: '../asset/ckfinder/ckfinder.html?type=Flash',
      filebrowserUploadUrl: '../asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
      filebrowserImageUploadUrl: '../asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
      filebrowserFlashUploadUrl: '../asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
  </script>
</body>
</html>