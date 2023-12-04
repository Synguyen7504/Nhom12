<?php
include '../PDO/pdo.php';
include 'model/user.php';
include 'model/phong.php';
include 'model/khachsan.php';
include 'model/loai.php';
include 'model/tiennghi.php';
include 'model/donhang.php';
include 'view/header.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // NGƯỜI DÙNG
        case 'user':
            $rows = truyVanUser();
            if ($_SESSION['tk']['quyen'] == 'staff') {
                $rows = truyVanUserKhachHang();
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($_SESSION['tk']['quyen'] == 'staff') {
                    $rows = null;
                    $rows[0] = truyVan1UserKhachHang($_POST['loc']);
                } else {
                    $rows = null;
                    $rows[0] = truyVan1User($_POST['loc']);
                }
            }

            include 'view/listuser.php';
            break;
        case 'adduser':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $dir = '../../img/' . rand(1, 1000) . $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $dir);
                addUser($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['username'], $_POST['pass'], $_POST['quyen'], $dir);
                header('location: index.php?act=user');
            }
            include 'view/adduser.php';
            break;
        case 'deleteuser':
            deleteUser($_GET['maKhachHang']);
            header('location: index.php?act=user');
            break;
        case 'updateuser':
            $maKhachHang = $_GET['maKhachHang'];
            $row = truyVan1User($maKhachHang);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['file'])) {
                    $dir = '../../img/' . rand(1, 1000) . $_FILES['file']['name'];
                    move_uploaded_file($_FILES['file']['tmp_name'], $dir);
                    updateUserImage($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['username'], $_POST['pass'], $_POST['quyen'], $dir, $maKhachHang);
                    header('location: index.php?act=user');
                } else {
                    updateUser($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['username'], $_POST['pass'], $_POST['quyen'], $maKhachHang);
                    header('location: index.php?act=user');
                }
            }
            include 'view/updateuser.php';
            break;
            // ĐƠN HÀNG
        case 'donhang':
            $rows = truyVanDonHang();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rows = null;
                $rows[0] = truyVan1DonHang($_POST['loc']);
            }
            include 'view/donhang.php';
            break;
        case 'deletedonhang':
            deleteDonHang($_GET['maDonHang']);
            header('location: index.php?act=donhang');
            break;
        case 'updatedonhang':
            updateDonHang($_GET['maDonHang']);
            header('location: index.php?act=donhang');
            break;
            // PHÒNG
        case 'phong':
            $rows = truyVanPhong();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rows = null;
                $rows[0] = truyVan1Phong($_POST['loc']);
            }
            include 'view/phong.php';
            break;
        case 'addphong':
            $khachSan = truyVanKhachSan();
            $loai = truyVanLoai();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $dir = '../../img/' . rand(1, 1000) . $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $dir);
                addPhong($_POST['KhachSan'], $_POST['loai'], $_POST['gia'], $_POST['giuong'], $_POST['dienTich'], $dir);
                header('location: index.php?act=phong');
            }
            include 'view/addphong.php';
            break;
        case 'deletephong':
            deletePhong($_GET['maPhong']);
            header('location: index.php?act=user');
            break;
        case 'updatephong':
            $maPhong = $_GET['maPhong'];
            $row = truyVan1Phong($maPhong);
            $khachSan = truyVanKhachSan();
            $loai = truyVanLoai();
            $tenKhachSan = truyVan1KhachSan($row['maKhachSan']);
            $tenLoai = truyVan1Loai($row['maLoaiPhong']);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['file'])) {
                    $dir = '../../img/' . rand(1, 1000) . $_FILES['file']['name'];
                    move_uploaded_file($_FILES['file']['tmp_name'], $dir);
                    updatePhongImage($_POST['maKhachSan'], $_POST['loai'], $_POST['gia'], $_POST['giuong'], $_POST['dienTich'], $dir, $maPhong);
                    header('location: index.php?act=phong');
                } else {
                    updatePhong($_POST['KhachSan'], $_POST['loai'], $_POST['gia'], $_POST['giuong'], $_POST['dienTich'], $maPhong);
                    header('location: index.php?act=phong');
                }
            }
            include 'view/updatephong.php';
            break;
            // KHÁCH SẠN
        case 'khachsan':
            $rows = truyVanKhachSan();
            include 'view/khachsan.php';
            break;
        case 'loaiphong':
            $rows = truyVanLoai();
            include 'view/loaiphong.php';
            break;
        case 'themks':
            $loi = [];
            if (isset($_POST['name'])) {

                $name = $_POST['name'];
                $diadiem = $_POST['diadiem'];
                $tinh = $_POST['tinh'];
                $gia = $_POST['gia'];
                $sao = $_POST['sao'];
                $nhah = isset($_POST['nhah']) ? true : false;
                $beboi = isset($_POST['beboi']) ? true : false;
                $wifi = isset($_POST['wifi']) ? true : false;
                $gym = isset($_POST['gym']) ? true : false;
                $maylanh = isset($_POST['maylanh']) ? true : false;
                $thuoc = isset($_POST['thuoc']) ? true : false;
                if (empty($name)) {
                    $loi[] = "Vui lòng nhập tên khách sạn";
                    goto loi;
                }
                if (empty($diadiem)) {
                    $loi[] = "Vui lòng nhập địa chỉ khách sạn";
                    goto loi;
                }
                if (empty($tinh)) {
                    $loi[] = "Vui lòng nhập tỉnh khách sạn";
                    goto loi;
                }
                if (empty($gia)) {
                    $loi[] = "Vui lòng giá  khách sạn";
                    goto loi;
                }
                if (empty($sao)) {
                    $loi[] = "Vui lòng sao khách sạn";
                    goto loi;
                }
                if ($sao > 5) {
                    $loi[] = "Sao khách sạn không được lớn hơn 5";
                    goto loi;
                }
                if (count($_FILES['img']['name']) < 4) {
                    $loi[] = "Vui lòng chọn 4 ảnh";
                    goto loi;
                }
                if (empty($loi)) {
                    for ($i = 0; $i < count($_FILES['img']['name']); $i++) {
                        $ten_tep = $_FILES['img']['name'][$i];
                        $duong_dan_tam_thoi = $_FILES['img']['tmp_name'][$i];
                        $thu_muc = __DIR__ . "/anhadmin/";
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
                addkhachsan($name, $diadiem, $tinh, $gia, $sao, $link_anh, $link_anh, $link_anh, $link_anh, $nhah, $beboi, $gym, $wifi, $maylanh, $thuoc);
            }
            loi:

            include 'view/themks.php';
            break;
            // case 'tiennghi':
            //     $rows = truyVanTienNghi();
            //     include 'view/thongke.php';
            //     break;
        default:
            header('location: index.php?act=user');
            break;
    }
} else {
    header('location: index.php?act=user');
}
include 'view/footer.php';
