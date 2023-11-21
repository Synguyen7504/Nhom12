<?php
include "./PDO/khachhang.php";
$get = "";
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
                    case 'product':
                        include 'layout/product.php';
                        break;
                            case 'card':
                                include "layout/card.php";
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
?>