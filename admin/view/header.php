<?php
session_start();

if (!$_SESSION['login']) {
    header("Location: ../layout/dangnhap.php");
}
if ($_SESSION['login'] && $_SESSION['login'] != "admin") {
    header("Location: ../index.php");
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/themks.css">




    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body>

    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
        <!--
    
            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag
    
        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="index.php" class="simple-text">
                    sogo hotel
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="index.php?act=thongke">
                        <i class="pe-7s-graph"></i>
                        <p>Thống kê</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=user">
                        <i class="pe-7s-user"></i>
                        <p>Người dùng</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=loaiphong">
                        <i class="pe-7s-note2"></i>
                        <p>Loại phòng</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=khachsan">
                        <i class="pe-7s-note2"></i>
                        <p>Khách sạn</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=phong">
                        <i class="pe-7s-note2"></i>
                        <p>Phòng</p>
                    </a>
                </li>
                <li>
                    <a href="index.php?act=tiennghi">
                        <i class="pe-7s-leaf"></i>
                        <p>Tiện nghi</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Admin</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="../layout/dx.php">
                                <p>Đăng xuất</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>