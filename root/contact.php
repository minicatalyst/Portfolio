<?php

    $email_to = 'minicatalyst33@gmail.com';
    $name = $_POST['Name'];
    $mail_from = $_POST['Email'];
    $message = $_POST['Message'];
 
    $subject = 'Subject ' . $name;
 
    $body_message = 'From: ' . $name . "\r\n";
    $body_message .= 'E-mail: ' . $mail_from . "\r\n";
    $body_message .= 'Message: ' . $message;
 
    $headers = 'From: ' . $mail_from . "\r\n";
    $headers .= 'Reply-To: ' . $mail_from . "\r\n";
 
    $mail_sent = mail($mail_to, $subject, $body_message, $headers);


     if ($mail_sent == true){ ?>
        <script language="javascript" type="text/javascript">
        alert('Thank you for contacting me! I will be in touch shortly.');
		window.location = 'index.html';
         </script>
    <?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Message not sent. Please, notify site administrator');
		window.location = 'index.html';
    </script>
    <?php
    }
?>
