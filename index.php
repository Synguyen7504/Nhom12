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
                        case 'login':
                            include "layout/login.php";
                            // đăng kí
                            $loi=[];
                            if (isset($_POST['dangki'])) {
                                $namedk=$_POST['namedk'];
                                $pas=$_POST['pas1'];
                                $pas2=$_POST['pas2'];
                                $sdt=$_POST['sdt'];
                                if (empty($namedk)) {
                                    $loi[]="Vui lòng nhập tên đăng nhập";
                                    goto thoi;
                                }
                                if (empty($pas)) {
                                    $loi[]="Vui lòng nhập mật khẩu";
                                    goto thoi;
                                }
                                if (empty($pas2)) {
                                    $loi[]="Vui lòng nhập lại mật khẩu";
                                    goto thoi;
                                }
                                if ($pas!= $pas2) {
                                    $loi[]="2 mật khẩu không trùng khớp";
                                    goto thoi;
                                }
                                if (empty($sdt)) {
                                    $loi[]="Vui lòng nhập số điện thoại";
                                    goto thoi;
                                }
                                if (empty($loi)) {
                                    try {
                                        $sx=$conn->prepare("INSERT INTO khachhang (tenKhachHang, soDienThoai, tenDangNhap, matKhau)	
                                        VALUES (:tenKhachHang, :soDienThoai, :tenDangNhap, :matKhau)");
                                        $sx->bindParam(":tenKhachHang", $namedk);
                                        $sx->bindParam(":soDienThoai", $sdt);
                                        $sx->bindParam(":tenDangNhap", $namedk);
                                        $sx->bindParam(":matKhau", $pas);
                                        $sx->execute();
                                    } catch (PDOException $e) {
                                        $loi[] = "Lỗi ghi CSDL: " . $e->getMessage();
                                    }
                                }
                            thoi :    
                            //end đk -> đn
                            }elseif (isset($_POST['dangnhap'])) {
                                $tk=$_POST['tk'];
                                $mk=$_POST['mk'];
                                if (empty($tk)) {
                                    $loi[]="Vui lòng nhập tên đăng nhập";
                                    goto thoi2;
                                }
                                if (empty($mk)) {
                                    $loi[]="Vui lòng nhập mật khẩu";
                                    goto thoi2;
                                }
                               $taikhoan= khachhang($tk, $mk);
                               print_r($taikhoan);
                               if (empty($loi)) {
                                if (!empty($taikhoan)) {
                                    header("Location: index.php");

                                }else{
                                    echo "Tài khoản không tồn tại";
                                }
                               }
                               thoi2:
                            }
                            break;
        // Thêm vào giỏ hàng
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
                                    include "order/card.php";
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