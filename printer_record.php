<?php

include('connect.php');
if (isset($_SESSION['u_name'])) {
    $name = $_SESSION['u_name'];
}
$strSQLweb = "SELECT `id`, `project`, `printer_number`, `reservation_date`, `hours_required`, `email` FROM `printerdt_db` WHERE 1 ";
$web_query = mysqli_query($conn,$strSQLweb);
$web_record = mysqli_fetch_array($web_query);
        // ตรวจสอบว่า query สำเร็จหรือไม่
    if ($web_query) {
        while ($web_record = mysqli_fetch_array($web_query)) {
            // ทำสิ่งที่คุณต้องการกับข้อมูลที่ดึงมาได้ที่นี่
            $id = $web_record['id'];
            $project = $web_record['project'];
            $printer_number = $web_record['printer_number'];
            $reservation_date = $web_record['reservation_date'];
            $hours_required = $web_record['hours_required'];
            $email = $web_record['email'];

            // ตัวอย่างการใช้ข้อมูล
        }
    } else {
        // กรณีที่ query ไม่สำเร็จ
        echo "Error in SQL query: " . mysqli_error($conn);
    }
     // Include PHPMailer Autoload and Exception files
?>