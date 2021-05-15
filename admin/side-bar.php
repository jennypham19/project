<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 
</head>
<body>
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      user-select: none;
      box-sizing: border-box;
    }
    .sidebar{
      width: 15%;
      height: 100vh;
      background: #F1A573;
      transition: left 0.4s ease;
    }
    .sidebar .text{
      color: #000;
      font-size: 25px;
      font-weight: 600;
      line-height: 65px;
      text-align: center;
      background: #F1A573;
      letter-spacing: 1px;
    }
    nav ul{
      background: #F1A573;
      height: 100%;
      width: 100%;
      list-style: none;
    }
    nav ul li{
      line-height: 60px;
      border-top: 1px solid rgba(255,255,255,0.1);
    }
    nav ul li:last-child{
      border-bottom: 1px solid rgba(255,255,255,0.05);
    }
    nav ul li span{
      position:absolute;
      top:20px;
      left:10px;
    }
    nav ul li a{
      position: relative;
      color: #000;
      text-decoration: none;
      font-size: 18px;
      padding-left: 40px;
      font-weight: 500;
      display: block;
      width: 100%;
      border-left: 3px solid transparent;
    }
    nav ul li a:hover{
      color: #403E3B;
      background: #EAB883;
      border-left-color: #322F2E;
    }
    nav ul ul{
      position: static;
      display: none;
    }
    nav ul .menu-show.show{

      display: block;
    }
    nav ul .genre-show.show1{
      display: block;
    }
    nav ul .blog-show.show2{
      display: block;
    }
    nav ul .bill-show.show3{
      display: block;
    }
    nav ul .staff-show.show4{
      display: block;
    }
    nav ul ul li{
      line-height: 42px;
      border-bottom: none;
    }
    nav ul ul li a{
      font-size: 17px;
      color: #000;
      padding-left: 60px;
    }
  </style>
  <nav class="sidebar">
    <div class="text"><a href="index.php?sidebar=Menu-Watch" style="text-decoration:none; color: #000;">Adminstator</a></div>
    <ul>
      <li class="active">
        <a href="#" class="menu-btn"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M3 2h2v20H3zm16 0H6v20h13c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm-1 10H9v-2h9v2zm0-4H9V6h9v2z" fill="#626262"/></svg></span>&nbsp;Quản Lý Thực Đơn</a>
        <ul class="menu-show">
          <li><a href="index.php?sidebar=Menu-Watch">Danh Sách Thực Đơn</a></li>
          <li><a href="index.php?sidebar=Menu-Add">Thêm Thực Đơn</a></li>
        </ul>
      </li>

      <li>
        <a href="#" class="genre-btn"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.1 13.34l2.83-2.83L3.91 3.5a4.008 4.008 0 0 0 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38c1.91-1.91 2.28-4.65.81-6.12c-1.46-1.46-4.2-1.1-6.12.81c-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88l1.41-1.41L13.41 13l1.47-1.47z" fill="#626262"/></svg></span>&nbsp;Quản Lý Thể Loại</a>
        <ul class="genre-show">
          <li><a href="index.php?sidebar=Genre-Watch">Danh Sách Thể Loại</a></li>
          <li><a href="index.php?sidebar=Genre-Add">Thêm Thể Loại</a></li>
        </ul>
      </li>

      <li>
        <a href="#" class="blog-btn"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path d="M19 10h7v2h-7z" fill="#626262"/><path d="M19 15h7v2h-7z" fill="#626262"/><path d="M19 20h7v2h-7z" fill="#626262"/><path d="M6 10h7v2H6z" fill="#626262"/><path d="M6 15h7v2H6z" fill="#626262"/><path d="M6 20h7v2H6z" fill="#626262"/><path d="M28 5H4a2.002 2.002 0 0 0-2 2v18a2.002 2.002 0 0 0 2 2h24a2.002 2.002 0 0 0 2-2V7a2.002 2.002 0 0 0-2-2zM4 7h11v18H4zm13 18V7h11v18z" fill="#626262"/></svg></span>&nbsp;Quản Lý Bài Viết</a>
        <ul class="blog-show">
          <li><a href="index.php?sidebar=Blog-Watch">Danh Sách Bài Viết</a></li>
          <li><a href="index.php?sidebar=Blog-Add">Thêm Bài Viết</a></li>
        </ul>
      </li>

      <li>
        <a href="#" class="bill-btn"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1zm-1-2V4H5v16h14zM8 9h8v2H8V9zm0 4h8v2H8v-2z" fill="#626262"/></svg></span>&nbsp;Quản Lý Hóa Đơn</a>
        <ul class="bill-show">
          <li><a href="index.php?sidebar=Bill-Watch">Danh Sách Hóa Đơn</a></li>
        </ul>
      </li>

      <li>
        <a href="#" class="staff-btn"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 64 64"><path d="M40.067 20.573c0 4.557-3.699 8.25-8.26 8.25c-4.556 0-8.249-3.694-8.249-8.25s3.693-8.25 8.249-8.25c4.561 0 8.26 3.694 8.26 8.25z" fill="#626  262"/><path d="M31.82.524c-3.818 0-9.151 1.522-13.014 5.385l4.588 8.359a10.703 10.703 0 0 1 8.426-4.09c3.459 0 6.537 1.634 8.498 4.175l4.5-8.636C41.475 2.064 35.48.525 31.82.525zm3.4 6.138h-2.136v2.134h-2.566V6.662h-2.136V4.097h2.136V1.954h2.566v2.143h2.136v2.565z" fill="#626262"/><path d="M20.966 43.651h2.113l-3.018 10.344h23.581l-3.004-10.344h2.115l3.023 10.344h6.939l-4.736-15.672c-.74-2.587-3.984-7.142-9.582-7.28l-12.87-.011c-5.725.028-9.037 4.672-9.786 7.29l-4.828 15.672h7.037l3.016-10.343z" fill="#626262"/><path d="M.947 57.293h61.73v5.873H.947v-5.873z" fill="#626262"/></svg></span>&nbsp;Quản Lý Nhân Viên</a>
        <ul class="staff-show">
          <li><a href="index.php?sidebar=Staff-Info">Danh Sách Nhân Viên</a></li>
          <li><a href="index.php?sidebar=Add-Acount">Thêm Nhân Viên</a></li>
        </ul>
      </li>
      <li>
        <a href="dang-xuat.php" class="staff-btn"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19.002 3h-14c-1.103 0-2 .897-2 2v4h2V5h14v14h-14v-4h-2v4c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.898-2-2-2z" fill="#626262"/><path d="M11 16l5-4l-5-4v3.001H3v2h8z" fill="#626262"/></svg></span>&nbsp;Thoát</a>
      </li>
    </ul>
  </nav>
  <script>
    $('.menu-btn').click(function(){
      $('nav ul .menu-show').toggleClass("show");
    });
    $('.genre-btn').click(function(){
      $('nav ul .genre-show').toggleClass("show1");
    });
    $('.blog-btn').click(function(){
      $('nav ul .blog-show').toggleClass("show2");
    });
    $('.bill-btn').click(function(){
      $('nav ul .bill-show').toggleClass("show3");
    });
    $('.staff-btn').click(function(){
      $('nav ul .staff-show').toggleClass("show4");
    });
  </script>
</body>
</html>