<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Gîte Domaine Les Raynals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Discover Responsive web template, Bootstrap Web Templates, Flat Web Templates,
              Android Compatible web template, Aikis, Sikia, Gîte, Hotel, Location, Vacances, Airbnb, Week-end,
              Réservation, Mer, Piscine, Maison, SmartPhone Compatible web template, free WebDesigns for Nokia,
              Samsung, LG, Sony Ericsson, Motorola web design" />
    <!-- Custom Theme files -->
    <link href="./web/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <!-- gallery light box -->
    <link rel="stylesheet" href="./web/css/lightbox.css">
    <link href="./web/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="./web/css/w3-style.css" type="text/css" rel="stylesheet">
    <!-- font-awesome icons -->
    <link href="./web/css/font-awesome.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- web-fonts -->
    <!-- logo -->
    <link href="./web/css/font-great_vibes.css" rel="stylesheet">
    <!-- body -->
    <link href="./web/css/font-archivo.css" rel="stylesheet">
    <!-- //web-fonts -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">



</head>
<body>
<!-- header -->
<div class="w3_navigation">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="w3_navigation_pos">
                    <h1>
                        <a href="./index.php">Gîte
                            <span>Domaine Les Raynals</span>
                        </a>
                    </h1>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="menu menu--miranda">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item">
                            <a href="./index.php#about" class="scroll menu__link">À Propos</a>
                        </li>
                        <li class="menu__item">
                            <a href="./index.php#services" class="scroll menu__link">Location</a>
                        </li>
                        <li class="menu__item">
                            <a href="./index.php#reservation" class="scroll menu__link">Réserver</a>
                        </li>
                        <li class="menu__item first_right">
                            <a href="./index.php#gallery" class="scroll menu__link">Gallerie</a>
                        </li>
                        <li class="menu__item">
                            <a href="./index.php#contact" class="scroll menu__link">Contact</a>
                        </li>
                        <li class="menu__item">
                            <a href="./index.php#localisation" class="scroll menu__link">Plan</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>
<!-- //header -->
<div class="banner-bg-agileits" id="header_photo">
    <!--<div class="banner-dot">-->
    <!-- banner-text -->
    <div class="banner-text">
        <fieldset id="fieldset_header">
            <legend id="legend_header">
                <h2 style="font-size: 3.8em;">Domaine Les Raynals</h2>
            </legend>
            <div class="banner-sub-txt" id="banner-sub-txt">
                <span class="banner-txt">Animations bord de mer ou calme des grands espaces ?</span>
                <span class="banner-txt1">Offrez-vous les deux.</span>
            </div>
        </fieldset>
    </div>
    <!--</div>-->
</div>

<div class="w3_navigation_2">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="w3_navigation_pos">
                    <h1>
                        <a href="./index.php">Gîte
                            <span>Domaine Les Raynals</span>
                        </a>
                    </h1>
                </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-2">
                <nav class="menu menu--miranda">
                    <ul class="nav navbar-nav menu__list">
                        <li class="menu__item">
                            <a href="#about" class="scroll menu__link">À Propos</a>
                        </li>
                        <li class="menu__item">
                            <a href="#services" class="scroll menu__link">Location</a>
                        </li>
                        <li class="menu__item">
                            <a href="#reservation" class="scroll menu__link">Réserver</a>
                        </li>
                        <li class="menu__item first_right">
                            <a href="#gallery" class="scroll menu__link">Gallerie</a>
                        </li>
                        <li class="menu__item">
                            <a href="#contact" class="scroll menu__link">Contact</a>
                        </li>
                        <li class="menu__item">
                            <a href="#localisation" class="scroll menu__link">Plan</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
</div>

<script>
    $('.w3_navigation_2').hide();  // d'abord, on masque le deuxième menu de navigation, qui porte la classe "navigation2"
    const hauteur = 600; // XXX, c'est le nombre de pixels à partir duquel on déclenche le tout
    $(function(){
        $(window).scroll(() => { //Au scroll dans la fenetre on déclenche la fonction
            if ($(this).scrollTop() > hauteur) { //si on a défile de plus de XXX (variable "hauteur) pixels du haut vers le bas
                $('.w3_navigation').hide(); // On masque le 1
                $('.w3_navigation_2').show(); // On affiche le 2
            } else {
                $('.w3_navigation_2').hide(); // "et vice et versa" (© Les inconnus, 1990 ^^)
                $('.w3_navigation').show();
            }
        });
    });
</script>