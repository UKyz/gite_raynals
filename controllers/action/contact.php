<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 31/08/2018
 * Time: 11:26
 */

$name = stripslashes($_POST['name'] . " " . $_POST['name_2']);
$email = trim($_POST['email']);

/* Mail pour le réservateur */

$email_2 = "ccarvalho@sikia.fr";

$subject = "[Gîte Domaine Les Raynals - Réservation] Vous avez reçu un message depuis le site Domaine les Raynals.";

$message_2 = "Récapitulatif de la demande : <br><br>";
$message_2 .= "Identité : " . $name . "<br>";
$message_2 .= "Email : " . $email . "<br>";
$message_2 .= "Message : <br><br>" . stripslashes($_POST['content']);

$error = '';

if (!$error) {
    $mail = mail($email, $subject, $message_2, "From: " . $_POST['name_2'] .
        " " . $_POST['name_1'] . " <" . $email_2 . ">\r\n"
        . "Reply-To: " . $email_2 . "\r\n"
        . "Content-type:text/html; charset=utf-8" . "\r\n"
        . "X-Mailer: PHP/" . phpversion());
    /*if ($mail) {
        echo 'OK';
    }*/
}