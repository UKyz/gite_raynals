<?php

/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 03/07/2018
 * Time: 16:33
 */

require('./config/config.php');

if (isset($_POST) and isset($_POST['btn_submit_resa'])) {

    $resaOK = true;

    $date_begin = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['date_begin'])));

    $date_end = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['date_end'])));
    $date_end = date("Y-m-d", strtotime($date_end . ' +1 days'));

    $date = $date_begin;

    while ($date != $date_end) {
        $req = $bdd->prepare('SELECT * FROM calendrier WHERE date = :date');
        $req->execute(array('date' => $date));

        $donnees = $req->fetch();

        if ($donnees != null and $donnees['id_reservation'] != 0) {
            $resaOK = false;
        }

        $date = date("Y-m-d", strtotime($date . ' +1 days'));
    }

    if ($resaOK) {

        $message = "Aucun message supplémentaire.";
        if ($_POST['comment'] != "") {
            $message = stripslashes($_POST['comment']);
        }

        $req = $bdd->prepare('INSERT INTO reservations(name, email, phone, date_begin, date_end, comment, status) 
            VALUES(:name, :email, :phone, :date_begin, :date_end, :comment, :status)');

        $req->execute(array(
            'name' => stripslashes($_POST['f_name'] . " " . $_POST['name']),
            'email' => trim($_POST['email']),
            'phone' => trim($_POST['phone']),
            'date_begin' => join('-', array_reverse(explode('/', $_POST['date_begin']))),
            'date_end' => join('-', array_reverse(explode('/', $_POST['date_end']))),
            'comment' => $message,
            'status' => 'en attente'
        ));

        /* Mail pour le gîte */

        $name = stripslashes($_POST['prenom'] . " " . $_POST['nom']);
        $email = trim($_POST['email']);
        $tel = stripslashes($_POST['tel']);

        $subject = "[Gîte Domaine Les Raynals - Réservation] Vous avez reçu une réservation provenant du site Domaine les Raynals.";

        $message = "Le message provient de <br><br>";
        $message .= "Identité : " . $name . "<br>";
        $message .= "Email : " . $email . "<br>";
        $message .= "Téléphone : " . $tel . "<br><br>";
        $message .= "Réservation demandé du " . $_POST['date_begin'] . " " . $_POST['date_end'] . "<br>";
        if ($_POST['message'] == "") {
            $message .= "Message : Aucun message supplémentaire.<br><br>";
        } else {
            $message .= "Message : <br><br>" . stripslashes($_POST['message']);
        }

        $error = '';

        if (!$error) {
            $mail = mail(WEBMASTER_EMAIL, $subject, $message, "From: " . $_POST['prenom'] . " "
                . $_POST['nom'] . " <" . $email . ">\r\n"
                . "Reply-To: " . $email . "\r\n"
                . "Content-type:text/html; charset=utf-8" . "\r\n"
                . "X-Mailer: PHP/" . phpversion());
            /*if ($mail) {
                echo 'OK';
            }*/
        }

        /* Mail pour le réservateur */

        $email_2 = "nepasrepondre@domainedesraynals";

        $subject = "[Gîte Domaine Les Raynals - Réservation] Vous avez formulé une réservation sur le site Domaine les Raynals.";

        $message_2 = "Récapitulatif de la demande : <br><br>";
        $message_2 .= "Identité : " . $name . "<br>";
        $message_2 .= "Email : " . $email . "<br>";
        $message_2 .= "Téléphone : " . $tel . "<br><br>";
        $message_2 .= "Réservation demandé du " . $_POST['date_begin'] . " " . $_POST['date_end'] . "<br>";
        if ($_POST['message'] == "") {
            $message_2 .= "Message : Aucun message supplémentaire.<br><br>";
        } else {
            $message_2 .= "Message : <br><br>" . stripslashes($_POST['message']);
        }

        $error = '';

        if (!$error) {
            $mail = mail($email, $subject, $message_2, "From: " . $_POST['prenom'] .
                " " . $_POST['nom'] . " <" . $email_2 . ">\r\n"
                . "Reply-To: " . $email_2 . "\r\n"
                . "Content-type:text/html; charset=utf-8" . "\r\n"
                . "X-Mailer: PHP/" . phpversion());
            /*if ($mail) {
                echo 'OK';
            }*/
        }
    } else {
        echo "<script>document.location.href = './index.php?type=refuse';</script>";
    }

    /* TODO */
    //retourner la page avec un message header(...);
    echo "<script>document.location.href = './index.php?type=confirmation';</script>";
} else {
    //message erreur
}
