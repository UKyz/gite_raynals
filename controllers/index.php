<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 12/07/2018
 * Time: 15:07
 */

$req = $bdd->prepare('DELETE FROM calendrier WHERE date < :date ORDER BY date');
$req->execute(array(
    'date' => date('Y-m-j')
));


$req = $bdd->query('SELECT * FROM calendrier ORDER BY date');

while ($donnees = $req->fetch()) {
    if ($donnees['id_reservation'] == 0) {
        $calendrier_script .= "demoPicker.tooltips = [{
                    date : new Date('" . $donnees['date'] . "'),
                    text : '" . $donnees['price'] . "€'
                }];";
    } else if ($donnees['id_reservation'] == -1) {
        $calendrier_script .= "demoPicker.disabledDates = [
                    new Date('" . $donnees['date'] . "')
                ];";
    } else {
        $calendrier_script .= "demoPicker.highlight = [{
                    start: new Date('" . $donnees['date'] . "'),
                    end: new Date('" . $donnees['date'] . "'),
                    backgroundColor: '#05676E',
                    color: '#fff',
                    legend: 'Réservé'
                }];";
    }
}

$smarty->assign('calendrier_script', $calendrier_script);