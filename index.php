<?php

// Initialisation de l'environnement
include('./config/config_init.php');

// Fonctions
include('./controllers/fonctions.php');

//include('./controllers/action/maj_bdd_manuelle.php');
//Variable pour gérer laffichage du portail si Mise en Prod
$mep = false;

// Gestion de Routing
if (isset($_GET['action']) && file_exists(_CTRL_ . 'action/' . str_replace('.', '', $_GET['action']) . '.php')) {
    include(_CTRL_ . 'action/' . $_GET['action'] . '.php');
} else if (isset($_GET['admin']) && file_exists(_CTRL_ . 'admin/' . str_replace('.', '', $_GET['admin']) . '.php')) {
    include(_CTRL_ . 'admin/' . $_GET['admin'] . '.php');
} else if (isset($_GET['page']) && file_exists(_CTRL_ . str_replace('.', '', $_GET['page']) . '.php')) {
    include(_CTRL_ . $_GET['page'] . '.php');
} else {
    include(_CTRL_ . 'index.php');
}

// Affichage des templates
$smarty->display(_TPL_ . 'header.tpl');

if (isset($_GET['admin']) && file_exists(_TPL_ . 'admin/' . str_replace('.', '', $_GET['admin']) . '.tpl')) {
    $smarty->display(_TPL_ . 'admin/' . $_GET['admin'] . '.tpl');
} else if (isset($_GET['page']) && file_exists(_TPL_ . 'pages/' . str_replace('.', '', $_GET['page']) . '.tpl')) {
    $smarty->display(_TPL_ . 'pages/' . $_GET['page'] . '.tpl');
} else {
    $smarty->assign('current_page', "index");
    $smarty->display(_TPL_ . 'pages/index.tpl');
}

if(isset($_SESSION['u_id']) && !empty($_SESSION['u_id'])){
    $smarty->assign('session_u_id', $_SESSION['u_id']);
}else{
    $smarty->assign('session_u_id', null);
}

$smarty->display(_TPL_ . 'footer.tpl');
