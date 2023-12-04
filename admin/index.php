<?php
include '../PDO/pdo.php';
include 'model/user.php';
include 'model/phong.php';
include 'model/khachsan.php';
include 'model/loai.php';
include 'model/tiennghi.php';
include 'view/header.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'user':
            $rows = truyVanUser();
            include 'view/listuser.php';
            break;
        case 'phong':
            $rows = truyVanPhong();
            include 'view/phong.php';
            break;
        case 'khachsan':
            $rows = truyVanKhachSan();
            include 'view/khachsan.php';
            break;
        case 'loaiphong':
            $rows = truyVanLoai();
            include 'view/loaiphong.php';
            break;
        case 'themks':
            $loi=[];
            if (isset($_POST['name'])) {

                $name=$_POST['name'];
                $diadiem=$_POST['diadiem'];
                $tinh=$_POST['tinh'];
                $gia=$_POST['gia'];
                $sao=$_POST['sao'];
                $nhah = isset($_POST['nhah']) ? true : false;
                 $beboi = isset($_POST['beboi']) ? true : false;
                $wifi = isset($_POST['wifi']) ? true : false;
                $gym = isset($_POST['gym']) ? true : false;
                $maylanh = isset($_POST['maylanh']) ? true : false;
                $thuoc = isset($_POST['thuoc']) ? true : false;
                if (empty($name)) {
                    $loi[]="Vui lòng nhập tên khách sạn";
                    goto loi;
                }
                if (empty($diadiem)) {
                    $loi[]="Vui lòng nhập địa chỉ khách sạn";
                    goto loi;
                }
                if (empty($tinh)) {
                    $loi[]="Vui lòng nhập tỉnh khách sạn";
                    goto loi;
                }
                if (empty($gia)) {
                    $loi[]="Vui lòng giá  khách sạn";
                    goto loi;
                }
                if (empty($sao)) {
                    $loi[]="Vui lòng sao khách sạn";
                    goto loi;
                }
                if ($sao>5) {
                    $loi[]="Sao khách sạn không được lớn hơn 5";
                    goto loi;
                }
                if (empty($loi)) {
                    $link_anh=[];
                for ($i = 0; $i < count($_FILES['img']['name']); $i++) {
                    $ten_tep = $_FILES['img']['name'][$i];
                    $duong_dan_tam_thoi = $_FILES['img']['tmp_name'][$i];
                    $thu_muc=__DIR__."/anhadmin/";
                    // Tạo đường dẫn đầy đủ cho tệp tin
                    $duong_dan_cuoi_cung = $thu_muc . $ten_tep;

                    // Kiểm tra và di chuyển tệp tin
                    if (move_uploaded_file($duong_dan_tam_thoi, $duong_dan_cuoi_cung)) {
                        // Xử lý thành công, ví dụ: tạo đường link đầy đủ
                        $link_anh[$i] = "http://localhost/Nhom%2012/admin/anhadmin/" . $ten_tep;
                    } else {
                        // Ghi lại lỗi vào mảng $loi
                        $loi[] = 'Lỗi di chuyển ảnh ' . $ten_tep . ': ' . error_get_last()['message'];
                        }
                    }

                }
                addkhachsan($name,$diadiem, $tinh, $gia,$sao, $link_anh[0], $link_anh[1], $link_anh[2], $link_anh[3],$nhah,$beboi,$gym,$wifi,$maylanh,$thuoc);
            } 
                loi:

            include 'view/themks.php';
            break;
            case 'updateKhachSan':
                $loi=[];
                if (isset($_GET['maKhachSan'])) {
                    $id=intval($_GET['maKhachSan']);
                    $rows=truyVanKhachSan_1($id);
                }else{
                    $loi[]="Không tìm thấy khách sạn cần sửa";
                }
                if (isset($_POST['name'])) {

                    $name=$_POST['name'];
                    $diadiem=$_POST['diadiem'];
                    $tinh=$_POST['tinh'];
                    $gia=$_POST['gia'];
                    $sao=$_POST['sao'];
                    $nhah = isset($_POST['nhah']) ? true : false;
                     $beboi = isset($_POST['beboi']) ? true : false;
                    $wifi = isset($_POST['wifi']) ? true : false;
                    $gym = isset($_POST['gym']) ? true : false;
                    $maylanh = isset($_POST['maylanh']) ? true : false;
                    $thuoc = isset($_POST['thuoc']) ? true : false;
                    if (empty($name)) {
                        $loi[]="Vui lòng nhập tên khách sạn";
                        goto loi1;
                    }
                    if (empty($diadiem)) {
                        $loi[]="Vui lòng nhập địa chỉ khách sạn";
                        goto loi1;
                    }
                    if (empty($tinh)) {
                        $loi[]="Vui lòng nhập tỉnh khách sạn";
                        goto loi1;
                    }
                    if (empty($gia)) {
                        $loi[]="Vui lòng giá  khách sạn";
                        goto loi1;
                    }
                    if (empty($sao)) {
                        $loi[]="Vui lòng sao khách sạn";
                        goto loi1;
                    }
                    if ($sao>5) {
                        $loi[]="Sao khách sạn không được lớn hơn 5";
                        goto loi1;
                    }
                        $ten_tep = $_FILES['img']['name'];
                        $duong_dan_tam_thoi = $_FILES['img']['tmp_name'];
                        $thu_muc=__DIR__."/anhadmin/";
                        // Tạo đường dẫn đầy đủ cho tệp tin
                        $duong_dan_cuoi_cung = $thu_muc . $ten_tep;
                    $link_anh='';
                        // Kiểm tra và di chuyển tệp tin
                        if (move_uploaded_file($duong_dan_tam_thoi, $duong_dan_cuoi_cung)) {
                            // Xử lý thành công, ví dụ: tạo đường link đầy đủ
                            $link_anh = "http://localhost/Nhom%2012/admin/anhadmin/" . $ten_tep;
                        } 
                        if (empty($loi)) {
                            if ($link_anh!='') {
                                anhks($name,$diadiem, $tinh, $gia,$sao, $link_anh, $nhah,$beboi,$gym,$wifi,$maylanh,$thuoc,$id);
                            }else{
                                noanhks($name,$diadiem, $tinh, $gia,$sao, $nhah,$beboi,$gym,$wifi,$maylanh,$thuoc,$id);
                            }
                        }
                } 
                    loi1:
                include "view/suakhachsan.php";
                break;
                case 'deleteKhachSan':
                    if (isset($_GET['maKhachSan'])) {
                        $id=intval($_GET['maKhachSan']);
                        xoaks($id);
                        header("Location: index.php?act=khachsan");
                    }else{
                        echo"Không xác định sản phẩm cần xóa!!";
                    }
            break;
            case "themloai" :
                $loi=[];
            if (isset($_POST['name'])) {
                $name=$_POST['name'];
                $nhah = isset($_POST['nhah']) ? true : false;
                 $beboi = isset($_POST['beboi']) ? true : false;
                $wifi = isset($_POST['wifi']) ? true : false;
                $gym = isset($_POST['gym']) ? true : false;
                $maylanh = isset($_POST['maylanh']) ? true : false;
                $thuoc = isset($_POST['thuoc']) ? true : false;
                if (empty($name)) {
                    $loi[]="Vui lòng nhập Loại phòng";
                    goto thoi;
                }
                if (empty($loi)) {
                 addloai($name, $nhah, $beboi, $gym, $wifi,$maylanh, $thuoc);
                }} 
                thoi:
                include "view/themloai.php";
                break;
                case "updateLoaiPhong":
                    $loi=[];
                    if (isset($_GET['maLoaiPhong'])) {
                        $id=intval($_GET['maLoaiPhong']);
                        $rows=truyvanloaiphong($id);
                    }else{
                        $loi[]="Không tìm thấy khách sạn cần sửa";
                    }
                    if (isset($_POST['name'])) {
                        $name=$_POST['name'];
                        $nhah = isset($_POST['nhah']) ? true : false;
                         $beboi = isset($_POST['beboi']) ? true : false;
                        $wifi = isset($_POST['wifi']) ? true : false;
                        $gym = isset($_POST['gym']) ? true : false;
                        $maylanh = isset($_POST['maylanh']) ? true : false;
                        $thuoc = isset($_POST['thuoc']) ? true : false;
                        if (empty($name)) {
                            $loi[]="Vui lòng nhập Loại phòng";
                            goto thoi2;
                        }
                        if (empty($loi)) {
                         sualoai($name, $nhah, $beboi, $gym, $wifi,$maylanh, $thuoc,$id);
                         $loi[]="Sửa thành công";
                        }} 
                        thoi2:
                    include "view/sualoai.php";
                    break;
                    case 'deleteLoaiPhong':
                        if (isset($_GET['maLoaiPhong'])) {
                            $id=intval($_GET['maLoaiPhong']);
                            xoaloai($id);
                            header("Location: index.php?act=loaiphong");
                        }else{
                            echo"Không xác định sản phẩm cần xóa!!";
                        }
                        break;
                   
        case 'tiennghi':
            $rows = truyVanTienNghi();
            include 'view/tiennghi.php';
            break;
        default:
        $rows = truyVanKhachSan();
            include 'view/khachsan.php';
            break;
    }
} else {
    $rows = truyVanKhachSan();
    include 'view/khachsan.php';
}
include 'view/footer.php';