<?php


  $message = sprintf("Nom du contact : %s - Email : %s\n\nSujet : %s\n\n Information désirée  : %s\n\n Societe  : %s\n\n Message : %s\n", $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['telephone'], $_POST['message']);

    $headers = 'From: sourisseauguillaume@gmail.com' . "\r\n" .
         'X-Mailer: PHP/' . phpversion();

    mail('sourisseauguillaume@gmail.com', 'E-mail reçu via votre site internet www.imaa.eu', $message, $headers);

    Redirect('http://www.preprod.imaa.eu', false);



function Redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}





?>