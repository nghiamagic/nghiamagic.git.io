<?php
error_reporting(0);
ini_set('display_errors', 0); 

   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    session_start();
    ob_start();
    
    $headtitle = 'ThueAcc.Net - Cho Thuê Tài Khoản PUBG Giá Rẻ';
    
    require('config.php');
    require('template/head.php');
    require('template/navbar.php');
    require('template/taipubgtruockhithue.php');
    require('template/foot.php');

?>