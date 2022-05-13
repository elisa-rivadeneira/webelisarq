<?php

$to = 'erivadeneiraq@gmail.com';
$subject = ' este es el asunto';
$message = ' Hi este es el cuerpo del mensaje';

$headers = "From : The Sender name<amatullah.aanisa@gmail.com> \r\n";
$headers .= "Reply-To: amatullah.aanisa@gmail.com\r\n";
$headers .= "Content-type: text/html \r\n";

//Send email


if(mail($to, $subject, $message, $headers)) {
    echo "Mensaje Enviado";
} else {
    echo "Error, al enviar mensaje";
}

phpinfo();
?>