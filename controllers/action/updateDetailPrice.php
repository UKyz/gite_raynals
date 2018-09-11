<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 24/07/2018
 * Time: 10:09
 */

$date_begin = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['date_begin'])));
$date_end = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['date_end'])));

if (isset($_POST['date_begin']) && $_POST['date_begin'] != null &&
    isset($_POST['date_end']) && $_POST['date_end'] != null) {
    if (strtotime($date_begin) >= strtotime($date_end)) {
        $variableToEcho = "Le détail n'est pas disponible.1";
    } else {
        if (Reservation::verifResa2($date_begin, $date_end)) {
            $variableToEcho .= "Location (" .Reservation::calculPriceResa2($date_begin, $date_end) . "€)\n" .
                Services::showDetailPriceServices(Reservation::calculNbDays($date_begin, $date_end)
                    , $_POST['choices']['services_choice']);
        } else {
            $variableToEcho = "Le détail n'est pas disponible.1";
        }
    }
} else {
    $variableToEcho = "Le détail n'est pas disponible.";
}

echo $variableToEcho;