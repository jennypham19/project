<?php
if (isset($_GET["ma"])) {
  $ma = $_GET["ma"];
  include("../../connect/open.php");
  $sql = "SELECT * FROM admin WHERE ma=$ma";
  $result = mysqli_query($open, $sql);
  $nv = mysqli_fetch_array($result);
  include("../../connect/close.php");
}
?>
<body>
  <style type="text/css">
    .edit-staff{
      position: relative;
      left:15%;
      top:-730px;
      width:80%;
      height:100vh;
    }
    .edit-staff p{
      margin-left: 30px;
    }
    .edit-staff input{
      height:30px;
      border-radius:5px;
      border:solid 1px;
    }
    .edit-staff button{
      margin-left: 250px;
      width:50px;
      height:30px;
      background: #F1A573;
    }
    .edit-staff h1{
      margin:20px 0px 0px 50px;
    }
  </style>
  <?php  
  include("../side-bar.php");
  include("../content-admin.php");
  ?>
  <div class="edit-staff">
    <h1>Chỉnh sửa tài khoản</h1>
    <form action="sua-nhan-vien-process.php" method="post">
      <p>
        <span><input type="hidden" name="ma" size="50px" value="<?php echo $nv["ma"];?>"></span>
      </p><br>
      <p>
        <span>Tên:</span>
        <span><input type="text" name="fullname" size="50px" value="<?php echo $nv["hoten"]; ?>"></span>
      </p><br>
      <p>
        <span>Username:</span>
        <span><input type="text" name="user" size="50px" value="<?php echo $nv["userName"]; ?>"></span>
      </p><br>
      <p>
        <span>Password:</span>
        <span><input type="password" name="pass" size="50px" value="<?php echo $nv["passWord"]; ?>"></span>
      </p><br>
      <p>
        <span>Email:</span>
        <span><input type="text" name="email" size="50px" value="<?php echo $nv["email"]; ?>"></span>
      </p><br>
      <p>
        <span>Số điện thoại:</span>
        <span><input type="text" name="phone" size="50px" value="<?php echo $nv["sdt"]; ?>"></span>
      </p><br>
      <p>
        <span>Giới tính:</span>
        <span>
          <select name="sex">
            <option value="0" <?php echo $nv["gt"]==0?"selected":""; ?>>Nữ</option>
            <option value="1" <?php echo $nv["gt"]==1?"selected":""; ?>>Nam</option>
          </select>
        </span>
      </p><br>
      <p>
        <span>Quyền:</span>
        <span>
         <select name="right">
          <option value="0" <?php echo $nv["quyen"]==0?"selected":""; ?>>Admin</option>
          <option value="1" <?php echo $nv["quyen"]==1?"selected":""; ?>>SuperAdmin</option>
        </select>
      </span>
    </p><br>
    <p>
      <span>Địa chỉ:</span>
      <span><input type="text" name="address" size="50px" value="<?php echo $nv["diaChi"]; ?>"></span>
    </p><br>
    <p>
      <span><button class="btn-sub" name="btn-sub">Sửa</button></span>
    </p>
  </form>
</div>
</body>
</html>