  <?php
 
  $to = 'winsfolio@gmail.com' . "\r\n";
  $subject = 'Get a Quote Request From Carbook';
  $name = 'carbook submitter';
  $email = 'carbook@gmail.com';
  $vehicle = 'carbook@gmail.com';
  $pickup = htmlspecialchars($_POST['city']);
    $return_location = isset($_POST['location']) ? 'Yes' : 'No';
    $vehicle = $_POST['vehicle'];
    $date_from = $_POST['date_from'];
    $time_from = $_POST['time_from'];
    $date_to = $_POST['date_to'];
    $time_to = $_POST['time_to'];
    $rental_type = isset($_POST['rental_type']) ? $_POST['rental_type'] : 'Not selected'; 

   $headers .= "Reply-To: $name <$email>\r\n"; 
    $headers .= "Return-Path: The Sender <$email>\r\n"; 
    $headers .= "From: $email" ."\r\n" .
    $headers .= "Carbook Get A Quote\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
    
    $mail = mail($to, $subject, $message, $headers); 

 ?>