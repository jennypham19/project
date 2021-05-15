<?php
if (isset($_GET["maTD"])) {
  $ma = $_GET["maTD"];
  include("../../connect/open.php");
  $sql = "SELECT * FROM product WHERE MaSP=$ma";
  $result = mysqli_query($open, $sql);
  $sp=mysqli_fetch_array($result);
  include("../../connect/close.php");
}
?>
<body>
  <script type="text/javascript" src="../asset/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="../asset/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="../asset/ckfinder/ckfinder.js"></script>
  <style type="text/css">
    .edit-menu{
      position: relative;
      left:15%;
      top:-730px;
      width:80%;
      height:100vh;
    }
    .edit-menu p{
      margin-left: 30px;
    }
    .edit-menu input{
      height:30px;
      border-radius:5px;
      border:solid 1px;
    }
    .edit-menu button{
      margin-left: 350px;
      width:50px;
      height:30px;
      background: #F1A573;
    }
    .edit-menu h1{
      margin:0px 0px 0px 50px;
    }
  </style>
  <?php  
  include("../side-bar.php");
  include("../content-admin.php");
  ?>
  <div class="edit-menu">
    <h1>Chỉnh sửa thực đơn</h1>
    <form action="sua-thuc-don-process.php" method="post" enctype="multipart/form-data">
      <p>
        <span><input type="hidden" name="maTD" value="<?php echo $sp["MaSP"]; ?>"></span>
      </p><br>
      <p>
        <span>Mã thể loại:</span>
        <span>
          <select name="ma-the-loai">
            <option value="1" <?php echo $sp["MaTheLoai"]==1?"selected":""; ?>>Cơm</option>
            <option value="2" <?php echo $sp["MaTheLoai"]==2?"selected":""; ?>>Phở</option>
            <option value="3" <?php echo $sp["MaTheLoai"]==3?"selected":""; ?>>Bún</option>
            <option value="4" <?php echo $sp["MaTheLoai"]==4?"selected":""; ?>>Nem</option>
            <option value="5" <?php echo $sp["MaTheLoai"]==5?"selected":""; ?>>Chả</option>
            <option value="6" <?php echo $sp["MaTheLoai"]==6?"selected":""; ?>>Đồ Ăn Vặt</option>
            <option value="7" <?php echo $sp["MaTheLoai"]==7?"selected":""; ?>>Món Tráng Miệng</option>
            <option value="8" <?php echo $sp["MaTheLoai"]==8?"selected":""; ?>>Đồ Uống</option>
            <option value="9" <?php echo $sp["MaTheLoai"]==9?"selected":""; ?>>Lẩu</option>
          </select>
        </span>
      </p><br>
      <p>
        <span>Tên sản phẩm:</span>
        <span><input type="text" name="name" size="50px" value="<?php echo $sp["TenSP"]; ?>"></span>
      </p><br>
      <p>
        <span>Mô tả:</span>
        <span><textarea name="des" id="des" ><?php echo $sp["MoTa"];?></textarea></span>
      </p><br>
      <p>
        <span>Giá:</span>
        <span><input type="text" name="gia" size="50px" value="<?php echo $sp["Gia"]; ?>"></span>
      </p><br>
      <p>
        <span>Đơn vị tính:</span>
        <span><input type="text" name="unit" size="50px" value="<?php echo $sp["donvi"]; ?>"></span>
      </p><br>
      <p>
        <span>Ảnh sản phẩm:</span>
        <span><img src="../../IMAGES/<?php echo $sp['AnhSP'];?>" alt="" width="100px" height="100px"><input type="file" name="anh" size="50px" value=""></span>
      </p><br>
      <p>
        <span><button type="submit" class="sub"  name="sub">Sửa</button></span>
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
