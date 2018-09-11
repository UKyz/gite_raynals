<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 31/08/2018
 * Time: 09:59
 */

/*echo "<script>alert('" . (isset($_FILES['piece_jointe_1']) ? 'Salut' : 'Coucou') . "');</script> ";
echo "<script>alert('" . $_POST['name'] . "');</script> ";*/

/*if (isset($_FILES['piece_jointe_1']) AND $_FILES['piece_jointe_1']['error'] == 0) {
    // Testons si le fichier n'est pas trop gros
    if ($_FILES['piece_jointe_1']['size'] <= 1000000) {
        // Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['piece_jointe_1']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'pdf');
        if (in_array($extension_upload, $extensions_autorisees)) {
            // On peut valider le fichier et le stocker définitivement
            if (move_uploaded_file($_FILES['piece_jointe_1']['tmp_name'], './web/pieces_jointes/')) {
                header('Location: ./index.php?type=confirmation_history');
            } else {
                header('Location: ./index.php?type=refuse_history_4');
            }
        } else {
            header('Location: ./index.php?type=refuse_history');
        }
    } else {
        header('Location: ./index.php?type=refuse_history');
    }
} else {
        header('Location: ./index.php?type=refuse_history_3');
}*/

//=====Mail du destinataire final du message envoyé
$mail_destinataire = "ccarvalho@sikia.fr";

//=====Vérification de l'existence d'une pièce jointe.
if ($_FILES['piece_jointe_1']['name']<>"") $ispiece = true; else $ispiece = false;
if ($_FILES['piece_jointe_2']['name']<>"") $ispiece2 = true; else $ispiece2 = false;
if ($_FILES['piece_jointe_3']['name']<>"") $ispiece3 = true; else $ispiece3 = false;

//=====Vérification de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#",
    $mail_destinataire)) $passage_ligne = "\r\n"; else $passage_ligne = "\n";

//=====Récupération du mail, du nom de l'expéditeur et du sujet.
$mail = $_POST["email"];
$nom_expediteur = $_POST["name"] . " " . $_POST["name_2"];
$sujet = 'Message la vie du domaine : ' . $_POST['subject'];

//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Un message vient d'être envoyé depuis la passe la vie du domaine de votre site.";
$msg_body  = "<font color='#666666'><em><p>Mail de l'expéditeur : </font><strong>".$mail."</strong><br>";
$msg_body .= "<font color='#666666'>Nom de l'expéditeur : </font><strong>".$nom_expediteur."</strong></p>";
$msg_body .= "<p><font color='#666666'>La personne ci-dessus vous a contacté(e) à partir de votre site. Si vous 
désirez lui répondre, il vous suffit de répondre à ce message. Voici le contenu de son message :</font></em></p><br />";

$message_tape = htmlspecialchars($_POST["comment"], ENT_QUOTES);
$retourligne   = array("\r\n", "\n", "\r");
$remplace = '<br />';
$msg_body .= "<p>".str_replace($retourligne, $remplace, $message_tape)."</p>";
$msg_body = stripslashes($msg_body);

$message_html = "<html><head></head><body>".$msg_body."</body></html>";

//=====Transfert de la pièce jointe sur le serveur.
if ($ispiece) { //===traitement de la pièce jointe seulement si le champ du formulaire a été renseigné
    $uploaddir = './'; //===Chemin du dossier de votre serveur web dans lequel sera transféré la pièce jointe avant d'être traitée
    $upload_file = $uploaddir . $_FILES['piece_jointe_1']['name'];
    if (move_uploaded_file($_FILES['piece_jointe_1']['tmp_name'], $upload_file)) {
        $ext = explode(".", basename($_FILES['piece_jointe_1']['name']));
        switch($ext[1]) {
            default:
                $attach_type =  "application/octet-stream";
                break;
            case "gz":
                $attach_type =  "application/x-gzip";
                break;
            case "tgz":
                $attach_type =  "application/x-gzip";
                break;
            case "zip":
                $attach_type =  "application/zip";
                break;
            case "pdf":
                $attach_type =  "application/pdf";
                break;
            case "png":
                $attach_type =  "image/png";
                break;
            case "gif":
                $attach_type =  "image/gif";
                break;
            case "jpg":
            case"jpeg":
                $attach_type =  "image/jpeg";
                break;
            case "txt":
                $attach_type =  "text/plain";
                break;
            case "htm":
                $attach_type =  "text/html";
                break;
            case "html":
                $attach_type =  "text/html";
                break;
        }
        $attach_name = $_FILES["piece_jointe_1"]["name"];
    }
    //=====Lecture et mise en forme de la pièce jointe.
    if (file_exists($upload_file)) {
        $fichier = fopen($upload_file, "r");
        $attachement = fread($fichier, filesize($upload_file));
        $attachement = chunk_split(base64_encode($attachement));
        fclose($fichier);
    }
}


//=====Transfert de la pièce jointe sur le serveur.
if ($ispiece2) { //===traitement de la pièce jointe seulement si le champ du formulaire a été renseigné
    $uploaddir2 = './'; //===Chemin du dossier de votre serveur web dans lequel sera transféré la pièce jointe avant d'être traitée
    $upload_file2 = $uploaddir2 . $_FILES['piece_jointe_2']['name'];
    if (move_uploaded_file($_FILES['piece_jointe_2']['tmp_name'], $upload_file2)) {
        $ext2 = explode(".", basename($_FILES['piece_jointe_2']['name']));
        switch($ext2[1]) {
            default:
                $attach_type2 =  "application/octet-stream";
                break;
            case "gz":
                $attach_type2 =  "application/x-gzip";
                break;
            case "tgz":
                $attach_type2 =  "application/x-gzip";
                break;
            case "zip":
                $attach_type2 =  "application/zip";
                break;
            case "pdf":
                $attach_type2 =  "application/pdf";
                break;
            case "png":
                $attach_type2 =  "image/png";
                break;
            case "gif":
                $attach_type2 =  "image/gif";
                break;
            case "jpg":
            case"jpeg":
                $attach_type2 =  "image/jpeg";
                break;
            case "txt":
                $attach_type2 =  "text/plain";
                break;
            case "htm":
                $attach_type2 =  "text/html";
                break;
            case "html":
                $attach_type2 =  "text/html";
                break;
        }

        $attach_name2 = $_FILES["piece_jointe_2"]["name"];
    }
    //=====Lecture et mise en forme de la pièce jointe.
    if (file_exists($upload_file2)) {
        $fichier2 = fopen($upload_file2, "r");
        $attachement2 = fread($fichier2, filesize($upload_file2));
        $attachement2 = chunk_split(base64_encode($attachement2));
        fclose($fichier2);
    }
}


//=====Transfert de la pièce jointe sur le serveur.
if ($ispiece3) { //===traitement de la pièce jointe seulement si le champ du formulaire a été renseigné
    $uploaddir3 = './'; //===Chemin du dossier de votre serveur web dans lequel sera transféré la pièce jointe avant
    // d'être traitée
    $upload_file3 = $uploaddir3 . $_FILES['piece_jointe_3']['name'];
    if (move_uploaded_file($_FILES['piece_jointe_3']['tmp_name'], $upload_file3)) {
        $ext3 = explode(".", basename($_FILES['piece_jointe_3']['name']));
        switch($ext3[1]) {
            default:
                $attach_type3 =  "application/octet-stream";
                break;
            case "gz":
                $attach_type3 =  "application/x-gzip";
                break;
            case "tgz":
                $attach_type3 =  "application/x-gzip";
                break;
            case "zip":
                $attach_type3 =  "application/zip";
                break;
            case "pdf":
                $attach_type3 =  "application/pdf";
                break;
            case "png":
                $attach_type3 =  "image/png";
                break;
            case "gif":
                $attach_type3 =  "image/gif";
                break;
            case "jpg":
            case"jpeg":
                $attach_type3 =  "image/jpeg";
                break;
            case "txt":
                $attach_type3 =  "text/plain";
                break;
            case "htm":
                $attach_type3 =  "text/html";
                break;
            case "html":
                $attach_type3 =  "text/html";
                break;
        }

        $attach_name3 = $_FILES["piece_jointe_3"]["name"];
    }
    //=====Lecture et mise en forme de la pièce jointe.
    if (file_exists($upload_file3)) {
        $fichier3 = fopen($upload_file3, "r");
        $attachement3 = fread($fichier3, filesize($upload_file3));
        $attachement3 = chunk_split(base64_encode($attachement3));
        fclose($fichier3);
    }
}



//=====Création de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());

//=====Création du header de l'e-mail.
$headers = 'From: Workteam <contact@workteam.fr>'.$passage_ligne;
$header.= "Reply-To: ".$nom_expediteur." <".$mail_expediteur.">".$passage_ligne;
$header .= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========

$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;

//=====Ajout du message au format HTML.
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========

//=====On ferme la boundary alternative.
$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout de la pièce jointe.
if ($ispiece) { //===Ajout de la pièce jointe seulement si le champ du formulaire a été renseigné
    $message.= "Content-Type: ".$attach_type."; name=\"".$attach_name."\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: base64".$passage_ligne;
    $message.= "Content-Disposition: attachment; filename=\"".$attach_name."\"".$passage_ligne;
    $message.= $passage_ligne.$attachement.$passage_ligne.$passage_ligne;
    //$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
}


//=====Ajout de la pièce jointe.
if ($ispiece2) {
    $message.= "Content-Type: ".$attach_type2."; name=\"".$attach_name2."\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: base64".$passage_ligne;
    $message.= "Content-Disposition: attachment; filename=\"".$attach_name2."\"".$passage_ligne;
    $message.= $passage_ligne.$attachement2.$passage_ligne.$passage_ligne;
    //$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
}

//=====Ajout de la pièce jointe.
if ($ispiece2) {
    $message.= "Content-Type: ".$attach_type3."; name=\"".$attach_name3."\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: base64".$passage_ligne;
    $message.= "Content-Disposition: attachment; filename=\"".$attach_name3."\"".$passage_ligne;
    $message.= $passage_ligne.$attachement3.$passage_ligne.$passage_ligne;
    //$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
}


//=====Envoi de l'e-mail.
mail($mail_destinataire,$sujet,$message,$header);
//==========

