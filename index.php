<?php
if ($_GET['act'] != "login") {
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
                        case 'login':
                            include "layout/login.php";
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

if ($_GET['act'] != "login") {
    include "layout/footer.php";
}
?>