<?php
if (isset($_POST['apply'])) {
    $to = 'jibanxc@gmail.com';
    $subject = 'New Application';
    $message = 'A new application has been submitted.';
    $headers = 'From: Your Name <your-email@example.com>' . "\r\n" .
        'Reply-To: your-email@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
?>