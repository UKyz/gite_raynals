<?php
/**
 * Created by PhpStorm.
 * User: victorfauquembergue
 * Date: 23/07/2018
 * Time: 15:36
 */

class Services
{

    public static function showServices() {
        $services_script = "";

        global $bdd;
        $req = $bdd->query('SELECT * FROM services ORDER BY price');
        $donnees = $req->fetch();

        if ($donnees == null) {
            $services_script .= "<p>Il n'y a aucun services facturables pour le moment.</p>
                                <p>Veuillez nous contacter pour plus d'informations.</p>";
        } else {
            $req = $bdd->query('SELECT * FROM services ORDER BY price');
            while ($donnees = $req->fetch()) {
                if ($donnees['can_select'] == "yes") {
                    $services_script .= "<p>• Service facturé " . $donnees['price'] . "€. ";
                } else {
                    $services_script .= "<p>• Service facturable (si sélectionné) " . $donnees['price'] . "€. ";
                }
                $services_script .= "Détail du service : " . $donnees['details'] . ".</p>";
            }
        }

        return $services_script;
    }

    public static function showDetailPriceServices($nb_days, $tab_choice) {
        $detail_script = "";

        global $bdd;
        $req = $bdd->prepare('SELECT * FROM services WHERE can_select = :can_select');
        $req->execute(array('can_select' => 'no'));

        while ($donnees = $req->fetch()) {
            $detail_script .= "+ " . $donnees['details'] . " (" . $donnees['price'] . "€)\n";
        }

        foreach ($tab_choice as $key => $value) {
            $req = $bdd->prepare('SELECT * FROM services WHERE can_select = :can_select AND id = :id');
            $req->execute(array(
                'can_select' => 'yes',
                'id' => $value));

            while ($donnees = $req->fetch()) {
                $detail_script .= "+ " . $donnees['details'] . " (" . $donnees['price'] . "€)\n";
            }
        }

        return $detail_script;
    }

    public static function showChoiceService() {

        $detail_script = "";

        global $bdd;
        $req = $bdd->prepare('SELECT * FROM services WHERE can_select = :can_select');
        $req->execute(array('can_select' => 'yes'));

        while ($donnees = $req->fetch()) {
            $detail_script .= "<input class='free_choice_service' type='checkbox' name='services_choice' value='" .
                $donnees['id'] . "' id='" .
                $donnees['id'] . "'/>";
            $detail_script .= "<label class='free_choice_service' for='" . $donnees['id'] . "'>" .
                $donnees['details'] . " " . $donnees['price'] .
                "€</label><br />";
        }

        return $detail_script;

    }

}