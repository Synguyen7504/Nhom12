<?php
include "./layout/heder.php";

if((isset($_GET['act']))&&($_GET['act']!="")){
    $act = $_GET['act'];
    switch($act) {
        case 'home':
            include "./layout/idhome.php";
            break;
            case 'lichsu':
                include "./layout/lichsu_pt.php";
                break;
            case 'room':
                include "./layout/room.php";
                break;
            case 'ctp':
                include "./layout/chitieetsp.php";
                break;
    }
}else{
    include "./layout/idhome.php";
}
// include "./layout/idhome.php";
// include "./layout/lichsu_pt.php";
// include "./layout/chitieetsp.php";
// include "./layout/room.php";
include "./layout/foter.php";
?>