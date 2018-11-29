<?php
if(isset($_POST['submit'])){
    $to = "temperaga@gmail.com";
    $from = $_POST['email']; // zender email
    $first_name = $_POST['first_name'];
    $last_name = $_POST['OS'];

    $subject = "Switch & Ditch Alpha Request";
    $message = $first_name . " " . "Request to get the alpha version" . "\n\n";
    $headers = array("From: " . $from, "X-Mailer: PHP/" . PHP_VERSION);
    $headers = implode("\r\n", $headers);

    $subject2 = "Copy Of Your Switch & Ditch Alpha Request Submission";
    $message2 = "Dear " . $first_name . "\n\n" . "You have requested an alpha version of our game. You will hear from us shortly";
    $headers2 = "From:" . $to;


    $mail = mail($to,$subject,$message, $headers);
    mail($from,$subject2,$message2,$headers2);

    if($mail){
        echo "Mail Sent to: " . $to .". Thank you " . $first_name . ", we will contact you shortly.";
    } else{
        echo "Mail sending failed";
    }

    header("Location: index.php"); /* Redirect browser */
    exit();


}
?>