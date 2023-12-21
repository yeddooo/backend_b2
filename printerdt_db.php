<?php
        session_start();
        require_once('connect.php');
        include('mail.php');
        if(isset($_POST['submit'])){
            print_r($_POST);
            $project = $_POST['project'];
            $printer_number = $_POST['printer_number'];
            $reservation_date = $_POST['reservation_date'];
            $hours_required = $_POST['hours_required'];
            $email = $_POST['email'];
    
            $stmt = $conn->prepare("INSERT INTO printerdt_db (project, printer_number, reservation_date, hours_required, email) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $project, $printer_number, $reservation_date, $hours_required, $email);

            if($stmt->execute()){
                $_SESSION['success'] = "จองแล้ว"; 
                header("location: statusdear.php");
            } else {
                echo "Error: " . $stmt->error;
            }
    
            $stmt->close();
            $conn->close();
        }
?>

