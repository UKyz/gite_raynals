<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 18/07/2018
 * Time: 11:27
 * @param $tab
 * @return bool
 */

try {
    if ($_SERVER['SERVER_NAME'] == "localhost" OR $_SERVER['SERVER_NAME'] == "sikia.synology.me"
        OR $_SERVER['SERVER_NAME'] == "192.168.1.59") {
        $host = "localhost";
        $dbname = "domaine_les_reynals";
        $dbuser = "root";
        $dbmdp = "admin";
        $dbport = "3306";
    } else {
//        $host = "db474181553.db.1and1.com";
//        $dbname = "db474181553";
//        $dbuser = "dbo474181553";
//        $dbmdp = "Yua6rbGQ";
//        $dbport = "3306";
    }
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO("mysql:host=".$host.";port=".$dbport.";dbname=".$dbname, $dbuser, $dbmdp, $pdo_options);
    $bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée ...<br>".$e;
    die();
}

//require('./config/config_init.php');
//include ('./config/config_init.php');

function verifResa($date_begin, $date_end) {

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

    return $resaOK;
}

function calculPriceResa($date_begin, $date_end) {

    $price = 0;
    $date = $date_begin;

    while ($date != $date_end) {
        global $bdd;
        $req = $bdd->prepare('SELECT * FROM calendrier WHERE date = :date');
        $req->execute(array('date' => $date));

        $donnees = $req->fetch();

        $price += $donnees['price'];
        $date = date("Y-m-d", strtotime($date . ' +1 days'));
    }

    return $price;

}

$date_begin = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['date_begin'])));
$date_end = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['date_end'])));

$variableToEcho = "";

if (isset($_POST['date_begin']) && $_POST['date_begin'] != null &&
    isset($_POST['date_end']) && $_POST['date_end'] != null) {
    if (strtotime($date_begin) >= strtotime($date_end)) {
        $variableToEcho .= "Vos dates ne sont pas compatibles.";
    } else {
        if (verifResa($date_begin, $date_end)) {
            echo calculPriceResa($date_begin, $date_end) . '€ **';
        } else {
            $variableToEcho .= "Vos dates ne sont pas disponibles.";
        }
    }
} else {
    $variableToEcho .= "0€ **";
}

echo $variableToEcho;