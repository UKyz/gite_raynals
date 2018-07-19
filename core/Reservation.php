<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 13/07/2018
 * Time: 12:22
 */

//require('./config/config_init.php');

class Reservation {

    public static function verifResa($tab) {

        $resaOK = false;

        if (isset($tab) and isset($tab['btn_submit_resa'])) {

            $date_begin = date("Y-m-d", strtotime(str_replace('/', '-', $tab['date_begin'])));

            $date_end = date("Y-m-d", strtotime(str_replace('/', '-', $tab['date_end'])));

            $resaOK = ($date_begin >= $date_end) ? false : true;

            if ($resaOK) {
                $date = $date_begin;

                while ($date != $date_end) {
                    global $bdd;
                    $req = $bdd->prepare('SELECT * FROM calendrier WHERE date = :date');
                    $req->execute(array('date' => $date));

                    $donnees = $req->fetch();

                    if ($donnees != null and $donnees['id_reservation'] != 0) {
                        $resaOK = false;
                    }

                    $date = date("Y-m-d", strtotime($date . ' +1 days'));
                }
            }
        }

        return $resaOK;
    }

    public static function addResa($tab) {

        $message = "Aucun message supplémentaire.";
        if ($tab['comment'] != "") {
            $message = stripslashes($tab['comment']);
        }

        global $bdd;
        $req = $bdd->prepare('INSERT INTO reservations(name, email, phone, date_begin, date_end, comment, status) 
            VALUES(:name, :email, :phone, :date_begin, :date_end, :comment, :status)');

        $req->execute(array(
            'name' => stripslashes($tab['f_name'] . " " . $tab['name']),
            'email' => trim($tab['email']),
            'phone' => trim($tab['phone']),
            'date_begin' => join('-', array_reverse(explode('/', $tab['date_begin']))),
            'date_end' => join('-', array_reverse(explode('/', $tab['date_end']))),
            'comment' => $message,
            'status' => 'en attente'
        ));

    }

    public static function mailToGite($tab) {

        /* Mail pour le gîte */

        $name = stripslashes($tab['prenom'] . " " . $tab['nom']);
        $email = trim($tab['email']);
        $tel = stripslashes($tab['tel']);

        $subject = "[Gîte Domaine Les Raynals - Réservation] Vous avez reçu une réservation provenant du site Domaine les Raynals.";

        $message = "Le message provient de <br><br>";
        $message .= "Identité : " . $name . "<br>";
        $message .= "Email : " . $email . "<br>";
        $message .= "Téléphone : " . $tel . "<br><br>";
        $message .= "Réservation demandé du " . $tab['date_begin'] . " " . $tab['date_end'] . "<br>";
        if ($tab['message'] == "") {
            $message .= "Message : Aucun message supplémentaire.<br><br>";
        } else {
            $message .= "Message : <br><br>" . stripslashes($tab['message']);
        }

        $error = '';

        if (!$error) {
            $mail = mail(WEBMASTER_EMAIL, $subject, $message, "From: " . $tab['prenom'] . " "
                . $tab['nom'] . " <" . $email . ">\r\n"
                . "Reply-To: " . $email . "\r\n"
                . "Content-type:text/html; charset=utf-8" . "\r\n"
                . "X-Mailer: PHP/" . phpversion());
            /*if ($mail) {
                echo 'OK';
            }*/
        }

    }

    public static function mailToClient($tab) {

        $name = stripslashes($tab['prenom'] . " " . $tab['nom']);
        $email = trim($tab['email']);
        $tel = stripslashes($tab['tel']);

        /* Mail pour le réservateur */

        $email_2 = "nepasrepondre@domainedesraynals";

        $subject = "[Gîte Domaine Les Raynals - Réservation] Vous avez formulé une réservation sur le site Domaine les Raynals.";

        $message_2 = "Récapitulatif de la demande : <br><br>";
        $message_2 .= "Identité : " . $name . "<br>";
        $message_2 .= "Email : " . $email . "<br>";
        $message_2 .= "Téléphone : " . $tel . "<br><br>";
        $message_2 .= "Réservation demandé du " . $tab['date_begin'] . " " . $tab['date_end'] . "<br>";
        if ($tab['message'] == "") {
            $message_2 .= "Message : Aucun message supplémentaire.<br><br>";
        } else {
            $message_2 .= "Message : <br><br>" . stripslashes($tab['message']);
        }

        $error = '';

        if (!$error) {
            $mail = mail($email, $subject, $message_2, "From: " . $tab['prenom'] .
                " " . $tab['nom'] . " <" . $email_2 . ">\r\n"
                . "Reply-To: " . $email_2 . "\r\n"
                . "Content-type:text/html; charset=utf-8" . "\r\n"
                . "X-Mailer: PHP/" . phpversion());
            /*if ($mail) {
                echo 'OK';
            }*/
        }


    }
}