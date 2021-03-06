<?php

// Initialisation de l'environnement
include('./config/config_init.php');

// Fonctions
//include('./controllers/fonctions.php');

$smarty->clearAllCache();

//include('./controllers/action/maj_bdd_manuelle.php');
//Variable pour gérer laffichage du portail si Mise en Prod
$mep = false;

// Gestion de Routing
if (isset($_GET['action']) && file_exists(_CTRL_ . 'action/' . str_replace('.', '', $_GET['action']) . '.php')) {
    include(_CTRL_ . 'action/' . $_GET['action'] . '.php');
} else if (isset($_GET['page']) && file_exists(_CTRL_ . str_replace('.', '', $_GET['page']) . '.php')) {
    include(_CTRL_ . $_GET['page'] . '.php');
} else {
    include(_CTRL_ . 'index.php');
}

// Affichage des templates
if ($_GET['action'] != "updatePriceResa" and $_GET['action'] != "updateDetailPrice") {
    $smarty->display(_TPL_ . 'header.tpl');

    if (isset($_GET['page']) && file_exists(_TPL_ . 'pages/' . str_replace('.', '', $_GET['page']) . '.tpl')) {
        $smarty->display(_TPL_ . 'pages/' . $_GET['page'] . '.tpl');
    } else {
        $smarty->assign('current_page', "index");
        $smarty->display(_TPL_ . 'pages/index.tpl');
        if (isset($_GET['type']) &&
            file_exists(_TPL_ . 'modal/' . str_replace('.', '', $_GET['type']) . '.tpl')) {
            $smarty->display(_TPL_ . 'modal/' . $_GET['type'] . '.tpl');
        }
    }

    $smarty->display(_TPL_ . 'footer.tpl');
}
