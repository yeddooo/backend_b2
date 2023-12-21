<?php
include 'connect.php';
error_reporting(0);
ini_set('display_errors', 0);

// คำสั่ง SQL เพื่อดึงข้อมูลทั้งหมดจากตาราง printerdt_db
$sql = "SELECT DISTINCT printer_number, DATE(reservation_date) AS usage_date, SUM(hours_required) AS total_hours, SUM(id) AS total_users
        FROM printerdt_db
        GROUP BY printer_number, DATE(reservation_date)
        ORDER BY printer_number, DATE(reservation_date)";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // เก็บข้อมูลลงใน associative array ตาม printer_number และ usage_date
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[$row["printer_number"]][$row["usage_date"]] = [
            "total_hours" => $row["total_hours"],
            "total_users" => $row["total_users"] - 1
        ];
    }

    // $firstDate = reset(reset($data));

    // แปลงวันที่แรกเป็น DateTime object
    $startDate = new DateTime($firstDate);

    // เพิ่มวันทีไป 5 วัน
    $dates = [];
    for ($i = 0; $i < 5; $i++) {
        $dates[] = $startDate->format('Y-m-d');
        $startDate->add(new DateInterval('P1D'));
    }

    echo "<table border='1'>
            <tr>
                <th>Printer Number</th>";

    // แสดงวันที่เป็น header
    foreach ($dates as $date) {
        echo "<th>Date: $date</th>";
    }

    echo "</tr>";

    foreach ($data as $printerNumber => $printerData) {
        echo "<tr>";
        echo "<td>$printerNumber</td>";

        // แสดงข้อมูล hours และ users ตามวัน
        for ($i = 0; $i < 5; $i++) {
            $currentDate = date("Y-m-d", strtotime("+$i days", strtotime(reset($dates))));
            
            if (isset($printerData[$currentDate])) {
                $totalHours = $printerData[$currentDate]["total_hours"];
                $totalUsers = $printerData[$currentDate]["total_users"];
                echo "<td>Total Hours: $totalHours<br>Total Users: $totalUsers</td>";
            } else {
                echo "<td>ไม่มีข้อมูลการจอง</td>";
            }
        }

        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}
$conn->close();
?>

