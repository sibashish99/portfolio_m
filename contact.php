<?php 
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message=$_POST['message'];
    
    $email_from='sibashishbiswas111@gmail.com';

    $email_subject='New mail from website';

    $email_body="User Name: $name.\n";
                  "User email: $visitor_email.\n";
                      "message: $message.\n";
    $to ="sibashishbiswas656@gmail.com";

    $headers="From: $email_from \r\n";
    $headers="Reply_To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

                 
?>