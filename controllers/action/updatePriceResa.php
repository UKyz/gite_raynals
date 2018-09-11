<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 18/07/2018
 * Time: 11:27
 * @param $tab
 * @return bool
 */

$date_begin = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['date_begin'])));
$date_end = date("Y-m-d", strtotime(str_replace('/', '-', $_POST['date_end'])));

if (isset($_POST['date_begin']) && $_POST['date_begin'] != null &&
    isset($_POST['date_end']) && $_POST['date_end'] != null) {
    if (strtotime($date_begin) >= strtotime($date_end)) {
        $variableToEcho .= "Vos dates ne sont pas compatibles.";
    } else {
        if (Reservation::verifResa2($date_begin, $date_end)) {
            $variableToEcho .= Reservation::calculPriceResa($date_begin, $date_end, $_POST['choices']['services_choice']) . '€ **';
        } else {
            $variableToEcho .= "Vos dates ne sont pas disponibles.";
        }
    }
} else {
    $variableToEcho .= "0€ **";
}

echo $variableToEcho;