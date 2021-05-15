<?php
if (isset($_GET["maTL"])) {
  $ma = $_GET["maTL"];
  include("../../connect/open.php");
  $sql = "SELECT * FROM `the-loại` WHERE maTheLoai=$ma";
  $result = mysqli_query($open, $sql);
  $thloai = mysqli_fetch_array($result);
  include("../../connect/close.php");
}
?>
<body>
  <style type="text/css">
    .edit-genre{
     position: relative;
      left:15%;
      top:-730px;
      width:80%;
      height:100vh;
    }
    .edit-genre p{
      margin-left: 30px;
    }
    .edit-genre input{
      height:30px;
      border-radius:5px;
      border:solid 1px;
    }
    .edit-genre button{
      margin-left: 250px;
      width:50px;
      height:30px;
      background: #F1A573;
    }
    .edit-genre h1{
      margin:10px 0px 0px 50px;
    }
  </style>
  <?php  
  include("../side-bar.php");
  include("../content-admin.php");
  ?>
  <div class="edit-genre">
    <h1>Chỉnh sửa thể loại</h1><br>
    <form action="sua-the-loai-process.php" method="post">
      <p>
        <span><input type="hidden" name="maTL" size="50px" value="<?php echo $thloai["maTheLoai"]; ?>"></span>
      </p>
      <p>
        <span>Tên thể loại:</span>
        <span><input type="text" name="tenTL" size="50px" value="<?php echo $thloai["TenTheLoai"]; ?>"></span>
      </p><br>
      <p>
        <span><button class="sub" name="sub">Sửa</button></span>
      </p>      
    </form>
  </div>
 
</body>
</html>