<?php
include '../PDO/pdo.php';
include 'model/user.php';
include 'model/phong.php';
include 'model/khachsan.php';
include 'model/loai.php';
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
                $nhah = isset($_POST['nhah']) ? 1 : 0;
                 $beboi = isset($_POST['beboi']) ? 1 : 0;
                $wifi = isset($_POST['wifi']) ? 1 : 0;
                $gym = isset($_POST['gym']) ? 1 : 0;
                $maylanh = isset($_POST['maylanh']) ? 1 : 0;
                $thuoc = isset($_POST['thuoc']) ? 1 : 0;
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
                if (count($_FILES['img']['name'])<4) {
                    $loi[]="Vui lòng chọn 4 ảnh";
                    goto loi;
                }
                if (empty($loi)) {
                for ($i = 0; $i < count($_FILES['img']['name']); $i++) {
                    $ten_tep = $_FILES['img']['name'][$i];
                    $duong_dan_tam_thoi = $_FILES['img']['tmp_name'][$i];
                    $thu_muc=__DIR__."/anhadmin/";
                    // Tạo đường dẫn đầy đủ cho tệp tin
                    $duong_dan_cuoi_cung = $thu_muc . $ten_tep;
            
                    // Kiểm tra và di chuyển tệp tin
                    if (move_uploaded_file($duong_dan_tam_thoi, $duong_dan_cuoi_cung)) {
                        // Xử lý thành công, ví dụ: tạo đường link đầy đủ
                        $link_anh = "http://localhost/Nhom%2012/admin/anhadmin/" . $ten_tep;
                    } else {
                        // Ghi lại lỗi vào mảng $loi
                        $loi[] = 'Lỗi di chuyển ảnh ' . $ten_tep . ': ' . error_get_last()['message'];
                        }
                    }
                   
                }
                addkhachsan($name,$diadiem, $tinh, $gia,$sao, $link_anh, $link_anh, $link_anh, $link_anh,$nhah,$beboi,$wifi,$gym,$maylanh,$thuoc);
            } 
                loi:
            
            include 'view/themks.php';
            break;
        default:
            include 'view/thongke.php';
            break;
    }
} else {
    include 'view/thongke.php';
}
include 'view/footer.php';
