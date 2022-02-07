<?php
session_start();
include_once "Classes/Admin.php";
if(isset($_SESSION["user"])){
    $admin = new Admin();
    $admin->logout();
}