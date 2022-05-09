<?php

include("./conect.php");
    if(!isset($_SESSION['user'])){
        $_SESSION['no-login'] = "<div>You have to login to access Admin Panel.</div>";
        header('location:admin_login.php');
    }
?>