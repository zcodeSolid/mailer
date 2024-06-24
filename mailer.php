<?php
require 'vendor/autoload.php';


header("Access-Control-Allow-Origin: * ");

// Specify which HTTP methods are allowed
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

// Specify which headers are allowed in the actual request
header("Access-Control-Allow-Headers: Content-Type, Authorization");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require "conf.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
            // $$emailCustomer = $_POST["email"];
            $mail = php_mailer(new PHPMailer());
            $mail->isHTML(true);
            $mail->Subject = 'test email';
        
            $body = <<<MSG
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warning</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 style="color:red;">Warning</1>
     <h2>your phone is hacked</h2>
</body>
</html>
MSG;



            $mail->Body = $body;
            $mail->setFrom(email,"test");          
    
                $mail->addAddress("monaimelkhanchoufi@gmail.com", "Warning");
            try {
                $mail->send();
                echo "sendeed";
                return;
            } catch (ErrorException $e) {
                echo 'Error sending email: ' . $mail->ErrorInfo;
                // echo js_alert(msg_ssn(return:true));
                return;
            }
          }