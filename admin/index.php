<?php
include 'view/header.php';

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'table':
            include 'view/table.php';
            break;
        case 'listuser':
            include 'view/listuser.php';
            break;
        default:
            include 'view/thongke.php';
            break;
    }
} else {
    include 'view/thongke.php';
}
include 'view/footer.php';
