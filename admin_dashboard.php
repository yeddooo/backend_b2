<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin 3D Printer</title>
    <link rel="icon" type="image/png" href="../image/favicon.png">
     <!--check file nameอีกทีนะ-->
    <link rel="stylesheet" href="../styles/admin.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <header>
    <div class="container">
        <nav class="navbar">
            <ul>
                <div class="a">
                    <li>3D Printer</li>
                </div>
            </ul>
        </nav>
    </div>
    </header>


<!--<?php 
include 'connect.php';
$sql3 = "SELECT * FROM user_profile";
$query3 = mysqli_query($conn, $sql3);
$sql2 = "SELECT * FROM printerdt_db";
$query2 = mysqli_query($conn, $sql2);
$total_record = mysqli_num_rows($query2);
$total_page = ceil($total_record);
$limit_page = $total_page;
?>-->
<div class="text">
<div class="row-no-gutters">
    <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm text-center" cellspacing="0"
        width="100%">
        <thead class="thead-dark">
            <tr>
                <th class="th-sm">ไอดี</th>
                <th class="th-sm">ชื่องาน</th>
                <th class="th-sm">เครื่องหมายเลข</th>
                <th class="th-sm">เวลาที่จอง</th>
                <th class="th-sm">จำนวนชั่วโมงที่ใช้ทำงาน</th>
                <th class="th-sm">อีเมล</th>
            </tr>
        </thead>
        <!--<tbody <?php while ($my_record=mysqli_fetch_assoc($query2)) {?>>-->
            <tbody>
            <tr>
                <td>
                    <!--<?= $my_record['id']; ?>-->
                    1
                </td>
                <td>
                    <!--<?= $my_record['project']; ?>-->
                    Cylinder
                </td>
                <td>
                    <!--<?= $my_record['printer_number']; ?>-->
                    506
                </td>
                <td>
                    <!--<?= $my_record['reservation_date']; ?>-->
                    2023-12-20
                </td>
                <td>
                    <!--<?= $my_record['hours_required']; ?>-->
                    1
                </td>
                <td>
                    <!--<?= $my_record['email']; ?>-->
                    deartanaree.22@gmail.com
                </td>
                
            </tbody>
    </table>
                    <!--<?php
                    if (isset($_POST['unbanuser'])) {
                      $my_id = $_POST['unbanuser'];
                      $del = "UPDATE user_profile SET u_status = 0 WHERE id =  $my_id";
                      $my_del = mysqli_query($conn, $del);

                      $title = 'ทำการปลดแบนผู้ใช้เสร็จสิ้น!';
                      $text = 'ระบบกำลังอัพเดทข้อมูล...';
                      $delay = '3000';
                      $link = 'main.php?page=user';
                      msg_success($title, $text, $delay, $link);
                    }
                    ?>
                    <button onclick="errorOutput(<?php echo $my_record['id']; ?>)">Error</button>-->
                    <button >Error</button>
</div>
</div>
</body>
</html>



<?php  }?>
<script>
    function errorOutput(rowID) {
        // AJAX request to handle the "Error" button
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.errorID) {
                    // Handle success or UI update for the "Error" button
                    alert("Error handled successfully");
                } else {
                    // Handle error for the "Error" button
                    alert("Error handling error");
                }
            }
        };
        xhr.open("POST", "handle_error.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("rowID=" + rowID);
    }
</script>
