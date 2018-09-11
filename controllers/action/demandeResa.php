<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 18/07/2018
 * Time: 14:28
 */


// Ma clé privée
$secret = "6LerpmsUAAAAAFbt3U-_rrj6He0zHAFX1KCD0v4d";
// Paramètre renvoyé par le recaptcha
$response = $_POST['g-recaptcha-response'];
// On récupère l'IP de l'utilisateur
$remoteip = $_SERVER['REMOTE_ADDR'];

$api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
    . $secret
    . "&response=" . $response
    . "&remoteip=" . $remoteip ;

$decode = json_decode(file_get_contents($api_url), true);

if ($decode['success'] == true) {
    // C'est un humain
    if (Reservation::verifResa($_POST)) {
        Reservation::addResa($_POST);
        Reservation::mailToGite($_POST);
        Reservation::mailToClient($_POST);
        //echo "<script>document.location.href = './index.php?type=confirmation';</script>";
        header('Location: ./index.php?type=confirmation');
    } else {
        //echo "<script>document.location.href = './index.php?type=refuse';</script>";
        header('Location: ./index.php?type=refuse');
    }
} else {
    // C'est un robot ou le code de vérification est incorrecte
    header('Location: ./index.php?type=refuse_captcha');
}