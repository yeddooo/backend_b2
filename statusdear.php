<?php 
    include("printer_record.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
    <link rel="icon" type="image/png" href="../image/favicon.png">
    <link rel="stylesheet" href="../styles/status.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <ul>
                    <div class="a">
                        <li>3D Printer</li>
                    </div>
                    <li><a href="../pages/home.html">
                        <span class="material-symbols-outlined">
                            home
                        </span></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="text">
        <h2>Status</h2>
    
        <div class="data">
            <div id="output"></div>
                <?php  echo "Project: $project<br>Printer Number: $printer_number<br> Reservation Date: $reservation_date<br>Hours Required: $hours_required<br>";?>
            <button onclick="cancelOutput(<?php echo $id; ?>)">Cancel</button>
            <button onclick="errorOutput(<?php echo $id; ?>)">Error</button>
            <button onclick="finishOutput(<?php echo $id; ?>)">Finish</button>
        </div>
    </div>

    <script src="../function/status.js"></script>
    <script>
        function cancelOutput(rowID) {
            // AJAX request to delete the record
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {   
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.deleteID) {
                        // Record deleted successfully, handle UI update if needed
                        alert("Record deleted successfully");
                    } else {
                        // Error deleting record
                        alert("Error deleting record");
                    }
                }
            };
            xhr.open("POST", "cancel.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("rowID=" + rowID);
        }
        function errorOutput(rowID) {
            // AJAX request to handle the "Error" button
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
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
        function finishOutput(rowID) {
            // AJAX request to handle the "Finish" button
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.finishID) {
                        // Handle success or UI update for the "Finish" button
                        alert("Finish handled successfully");
                    } else {
                        // Handle error for the "Finish" button
                        alert("Error handling finish");
                    }
                }
            };
            xhr.open("POST", "handle_finish.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("rowID=" + rowID);
        }
    </script>
</body>
</html>

