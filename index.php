<?php
include "./PDO/khachhang.php";
include "./PDO/sanpham.php";
$get = "";
session_start();
if (isset($_GET['act'])) {
    $get = $_GET['act'];
}
if ($get != "login") {
    include "layout/header.php";
}

if (isset($_GET['act'])) {
    $act = $_GET["act"];
    switch ($act) {
        case 'rooms':
            include 'layout/rooms.php';
            break;
            case 'concat':
                include 'layout/concat.php';
                break;          
                case 'history':
                    include 'layout/history.php';
                    break;
        // trang sản phẩm chi tiêts
        case 'product':
        $maKhachSan = $_GET['maKhachSan'];
        $_SESSION['maKhachSan'] = $maKhachSan;
        $row = truyVan1($maKhachSan);
        $rows = truyVanPhong($maKhachSan);
        include 'layout/product.php';
        break;
        case 'addtocard':
           $maPhong =  $_GET['maPhongAdd'];
           $row = addToCard($maPhong); 
           if (empty( $_SESSION['card'][$maPhong])) {
            $_SESSION['card'][$maPhong] = $row;
        }
        $maKhachSan = $_SESSION['maKhachSan'];
        echo $maKhachSan;
        header("Location: index.php?act=product&maKhachSan=$maKhachSan");
            break;
        case 'deletecard':
           $maPhong =  $_GET['maPhongDelete'];
        $_SESSION['card'][$maPhong] = null;
            include "card.php";
            break;    
                            case 'card':
                                include "layout/card.php";
                                break;
                                case 'order':
                                    include "layout/order.php";
                                    break;
                                case 'pay':
                                    include "layout/pay.php";
                                    break;
        default:
        include "layout/home.php";
        break;
    }
}else{
    include "layout/home.php";
}

if ($get != "login") {
    include "layout/footer.php";
}
// sét time
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>