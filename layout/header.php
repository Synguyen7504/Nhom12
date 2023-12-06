<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sogo Hotel by Colorlib.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  <link rel="stylesheet" href="css/fancybox.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <!-- Theme Style -->
  <!-- Card -->
  <link rel="stylesheet" href="css/ctsp.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="css/style.css">

  <style>
    #carda {
      border-radius: 4px;
      padding: 13px;
      display: inline;
      font-size: larger;
      color: rgb(118, 114, 114);
      margin-left: 60px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    #carda:hover {
      color: white;
      background-color: #ffaa34;
    }

    .nav-pills .nav-link {
      font-weight: bold;
      font-size: 16px;
      color: #000;
      background-color: transparent;
      border-radius: 0;
      margin: 0 10px;
      padding: 10px 15px;
      /* Điều chỉnh padding */
      transition: all 0.3s ease;
    }

    .nav-pills .nav-link.active,
    .nav-pills .nav-link:hover {
      color: #fff;
      background-color: #dbc234;
      border-radius: 5px;

    }

    .card {
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card-header {
      background-color: #ffc533;
      color: #fff;
    }

    .card-img-container {
      width: 320px;
      float: right;
      /* Đổi float thành right để di chuyển ảnh sang bên phải */
      margin-left: 10px;
      /* Thay đổi margin-left thành margin-right */
    }
  </style>
</head>

<body>

  <header class="site-header js-site-header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="index.php">Sogo Hotel</a></div>
        <div class="col-6 col-lg-8">


          <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- Kết thúc menu-toggle -->

          <div class="site-navbar js-site-navbar">
            <nav role="navigation">
              <div class="container">
                <div class="row full-height align-items-center">
                  <div class="col-md-6 mx-auto">
                    <ul class="list-unstyled menu">
                      <li class="active"><a href="index.php">Trang chủ</a></li>
                      <li><a href="index.php?act=rooms">Phòng</a></li>
                      <!-- <li><a href="#">Về chúng tôi</a></li> -->
                      <!-- <li><a href="#">Tin tức</a></li> -->
                      <li><a href="index.php?act=concat">Liên Hệ</a></li>
                      <li><a href="index.php?act=donhang">Đơn hàng của bạn</a></li>
                      <?php
                      if (!empty($_SESSION['login'])) {
                      ?>
                        <li><a href="index.php?act=user&id=<?=$maKhachHang?>">Quản lý tài khoản</a></li>
                        <li><a href="./layout/dx.php">Thoát</a></li>
                      <?php
                      } else {
                      ?>
                        <li><a href="./layout/dangnhap.php">Đăng Nhập</a></li>
                      <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END head -->

  <section class="site-hero overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade-up">
          <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span> Hotel</span>
          <h1 class="heading">Lựa chọn tuyệt vời cho sự thoải mái của bạn</h1>
        </div>
      </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
      <div class="mouse-icon">
        <span class="mouse-wheel"></span>
      </div>
    </a>
  </section>