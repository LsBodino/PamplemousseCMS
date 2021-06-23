<?php
    $to = 'uprat@live.fr';
    $subject = 'le sujet';
    $message = 'Bonjour !';
    $headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers); ?>