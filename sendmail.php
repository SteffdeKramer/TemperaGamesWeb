<?php
if(isset($_POST['submit'])){
    $to = "0908034@hr.nl"; // ontvanger email
//    $to = tdvwit@gmail.com;
    $from = $_POST['email']; // zender email
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = array("From: " . $from, "Reply-To: tdvwit@gmail.com", "X-Mailer: PHP/" . PHP_VERSION);
    $headers = implode("\r\n", $headers);

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