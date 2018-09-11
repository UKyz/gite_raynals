<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 19/07/2018
 * Time: 15:27
 */

class Calendrier
{

    public static function dayPassed() {
        global $bdd;
        $req = $bdd->prepare('DELETE FROM calendrier WHERE date < :date');
        $req->execute(array(
            'date' => date('Y-m-j')
        ));
    }

    public static function updateCalender() {
        $calendrier_script = "";

        global $bdd;
        $req = $bdd->prepare('SELECT * FROM calendrier WHERE date >= :date ORDER BY date');
        $req->execute(array(
            'date' => date('Y-m-d')
        ));

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

        return $calendrier_script;
    }

}