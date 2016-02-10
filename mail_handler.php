<?php 
if(isset($_POST['submit'])){
    $to = "bharuka2@illinois.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>