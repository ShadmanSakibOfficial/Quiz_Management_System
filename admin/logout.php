<?php
include("../Html/conect.php");
    session_destroy();
    header('location:admin_login.php');
?>