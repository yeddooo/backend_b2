<?php 
include 'printer_record.php';
require 'C:\xamppNEW\htdocs\PHPMailer-master\src\Exception.php';
require 'C:\xamppNEW\htdocs\PHPMailer-master\src\PHPMailer.php';
require 'C:\xamppNEW\htdocs\PHPMailer-master\src\SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
date_default_timezone_set('Asia/Bangkok');
// Set your SMTP server settings
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "explob2@gmail.com";
$mail->Password = "ljfw emmq zejr ruuz";
$mail->Port = 587; // Adjust the port number if needed
$mail->SMTPSecure = 'tls'; // You may also use 'ssl' instead of 'tls'

// Set other email parameters
$mail->setFrom("explob2@gmail.com", "b2");
$mail->addAddress($email, "$project");
$mail->addCC("tongthonglongkong@gmail.com");
$mail->addBCC("tongthonglongkong@gmail.com");

// Set email content
$mail->isHTML(true);
$mail->Subject = "Printer Reservation Confirmation";
$mail->Body = "<p>Dear $project,</p>
            <p>Thank you for your reservation. Here are the details:</p>
            <ul>
                <li>Queue Position: $queue_position</li>
                <li>Hours Remaining: $hours_remaining</li>
            </ul>
            <p>We will notify you when it's your turn to use the printer.</p>
            <p>Best regards,<br>Your Printer Reservation Team</p>";
$mail->AltBody = "Thank you for your reservation. Queue Position: $queue_position, Hours Remaining: $hours_remaining. We will notify you when it's your turn to use the printer.";

// Send the email
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent successfully";
}



?>