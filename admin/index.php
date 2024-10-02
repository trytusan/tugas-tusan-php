<?php
include_once '../config/config.php';
$con = new config();

if($con->auth()){
    switch(@$_GET['mod']){
        case 'dokter':
            include_once './controller/dokter.php';
        break;
        default:
            include_once './controller/home.php';
    }
} else{
    include_once './controller/controller.php';
}
?>