<?php
    session_start();
    include_once('connect.php');
    $name = "-1";
    if (isset($_SESSION['u_name'])) {
    $name = $_SESSION['u_name'];
    }else{
      header("location: logout.php");
    }
?>