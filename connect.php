<?php

$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "tong";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>