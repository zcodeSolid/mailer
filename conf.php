<?php
define("email", "no-reply@webartvision.in");
define("emailhost", "host56.registrar-servers.com");
define("emailpass", "t3R#AhMy00({");


  function php_mailer($new_PHPMailer)
  {
     $mail = $new_PHPMailer;
     $mail->isSMTP();
     $mail->Host = emailhost;
     $mail->SMTPAuth = true;
     $mail->Username = email;
     $mail->Password = emailpass;
     $mail->SMTPSecure = 'tls';
     $mail->Port = 587;
     return $mail;
  }
  ?>