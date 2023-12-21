
<?php
include('connect.php');
if (isset($_POST['submitz'])) {
    // Log out logic here
    // You may include("connect.php") and destroy the session
    session_destroy();
    header("location: index.php");
    exit; // Make sure to exit after redirection
}
?>

