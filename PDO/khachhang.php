<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

include "pdo.php";
// đn
function khachhang($tk, $mk)
{
    $sql = "SELECT * FROM khachhang WHERE tenDangNhap = '$tk' AND matKhau = '$mk'";
    return pdo_query_one($sql);
}
// foi mk
function doimk($mk, $id)
{
    $sql = "UPDATE khachhang SET matKhau ='$mk' WHERE maKhachHang  = '$id'";
    return pdo_execute($sql);
}
function emailKhachHang()
{
    $sql = "SELECT email,tenKhachHang,matKhau FROM `khachhang`";
    return pdo_truyVanAll($sql);
}
// THƯ VIỆN MAILER
function sendEmail($email, $tenKhachHang, $pass)
{

    require 'D:/php/htdocs/nhom12/PHPMailer-master/src/Exception.php';
    require 'D:/php/htdocs/nhom12/PHPMailer-master/src/PHPMailer.php';
    require 'D:/php/htdocs/nhom12/PHPMailer-master/src/SMTP.php';

    //Load Composer's autoloader
    // require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'syvannguyen4747@gmail.com';                     //SMTP username
        $mail->Password   = "ocschossy1";                            //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('syvannguyen4747@gmail.com', '');
        $mail->addAddress($email, $tenKhachHang);     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Fogot password';
        $mail->Body    = "Password: $pass";

        $mail->send();
        echo 'Gửi thành công';
    } catch (Exception $e) {
        echo "Lỗi gửi";
    }
}
