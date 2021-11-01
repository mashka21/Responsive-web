<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subjet = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'mudane31@outlook.com';

    $email_subject = 'New Form Submisstion';

    $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "subject: $subjet.\n".
                "user message: $message.\n";

    $to = 'mashquul252@gmail.com';

    $headers = "From $email_from \r\n";

    $headers = ."Replay-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");

?>