<?php
if(isset($_POST['submit'])){
    $to = "temperaga@gmail.com";
    $from = $_POST['email']; // zender email
    $first_name = $_POST['first_name'];
    $last_name = $_POST['OS'];

    $subject = "Switch & Ditch Alpha Request";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = array("From: " . $from, "X-Mailer: PHP/" . PHP_VERSION);
    $headers = implode("\r\n", $headers);

    $subject2 = "Copy Of Your Switch & Ditch Alpha Request Submission";
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
    $headers2 = "From:" . $to;


    $mail = mail($to,$subject,$message, $headers);
    mail($from,$subject2,$message2,$headers2); // kopie voor zender

    if($mail){
        echo "Mail Sent to: " . $to .". Thank you " . $first_name . ", we will contact you shortly.";
    } else{
        echo "Mail sending failed";
    }


}
?>