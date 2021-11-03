<!doctype html>
<!--
~ File Name: index.php
~ Copyright (c) 2021 all right reserved
~ Created: Wed Jun 30 2021 01:31:52
~ author: Idrissa Sall
-->
<html lang="fr">
<head>
    <!-- balise meta pour l'encodage -->
    <meta charset="utf-8">

    <!-- Balise meta de description-->
    <meta name="author" content="Idrissa Sall">
    <meta name="description" content="Bienvenue sur Seeb-Mali (Label-Sécurité-Électrique)">
    <meta name="keywords"
        content="seeb-mali, seeb mali, électricité, label, sécurité électrique, sécurité électricité, électricité mali, installation, depannage, vente, acavie">

    <!-- social media -->
    <meta property="og:title" content="Bienvenue sur Seeb-Mali (Installation, Depannage, Vente)">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Chez Seeb-Mali ...">
    <meta property="og:image" content="ressources/logo/logo.png">

    <!-- compatibilité internet explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- compatibilité mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/bootstrap/dist/css/bootstrap.min.css" type="text/css">
    <!-- mon css -->
    <link rel="stylesheet" href="styles/style.css">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Icon -->
    <link rel="icon" href="ressources/logo/logo.png" type="image/x-icon">

    <!-- title -->
    <title>SEEB-MALI ÉLECTRICITÉ</title>
</head>

<body>

    <div class="container-fluid">
        <header>
            <div class="container">
                <div class="jumbotron" style="background-color: white; color: black">
                    <h1 class="display-6">
                        <center><strong><i><span style="color: red">SEEB-MALI ÉLECTRICITÉ</span></i></strong></center>
                    </h1>
                    <h4>
                        <center><span style="color: gray">Membre fondateur ACAVIE</span></center>
                    </h4>
                    <hr>
                    <p class="lead">
                        <center><em>INSTALLATION - DEPANNAGE - VENTE - CONTRÔLE</em></center>
                    </p>
                    <p>
                        <center><img src="ressources/logo/Acavie_mini.png" alt="ACAVIE"/></center>
                    </p>
                    <p>
                        <center>
                            <strong><em><span  style="color: red;">La sécurité électrique est un droit ! <br>
                            Le visa conformité est une exigence !</span></em></strong>
                        </center>
                    </p>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index" id="home">
                    <img src="ressources/logo/logo.png" width="30" height="30" class="d-inline-block align-top"
                        alt="Seeb-Mali"> SEEB-MALI ÉLECTRICITÉ
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="#home" id="home"><i class="bi bi-house"></i> Accueil </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about"><i class="bi bi-text-paragraph"></i> À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#domains"><i class="bi bi-award"></i> Domaines d'interventions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects"><i class="bi bi-terminal"></i> Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts"><i class="bi bi-telephone"></i> Contacts</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="ressources/img/installation_electrique1.jpg" class="d-block w-100" height="400" alt="...">
            </div>
            <div class="carousel-item">
                <img src="ressources/img/installation_camera1.jpg" class="d-block w-100" height="400" alt="...">
            </div>
            <div class="carousel-item">
                <img src="ressources/img/vente_de_materiel_electrique1.jpg" class="d-block w-100" height="400"
                    alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- div about -->
    <div class="container" id="about">
        <h1><i class="bi bi-text-paragraph"></i> À propos</h1>

        <div class="row">
            <!-- div text -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" id="black">
                <p>
                    SEEB-MALI, membre fondateur du groupe ACAVIE est une entreprise spécialisée entre autres dans la sécurité électrique, 
                    l'installation de panneaux solaires, l'installation électrique, la mise en place de systèmes de vidéos surveillances.
                    En partenariat avec l'énergie du Mali (EDM-SA) nous délivrons des visas conformités après vérifications et avant installations électriques.
                </p>

            </div>

            <!-- div info -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="red">

                <h4 id="adresseH5">Où nous trouver ? <i class="bi bi-arrow-down-circle-fill" id="adresseArrow"></i></h4>
                <p id="adresseTxt">Lafiabougou Koda rue 410, en face du carré de MADOU DIARRA</p>

                <h4 id="telH5">Nous joindre par téléphone ? <i class="bi bi-arrow-down-circle-fill" id="telArrow"></i>
                </h4>
                <p id="telTxt">Par téléphone: <a href="tel:0022320290755">20290755</a></p>

                <h4 id="mailH5">Nous joindre par email ? <i class="bi bi-arrow-down-circle-fill" id="mailArrow"></i>
                </h4>
                <p id="emailTxt"> Par email: <a href="mailto:seebmalitoure@yahoo.fr">seebmalitoure@yahoo.fr</a></p>

            </div>

        </div>

    </div>

    <hr>
    <hr>

    <!-- Domaines d'interventions -->
    <div class="container" id="domains">
        <h1><i class="bi bi-award"></i> Domaines d'interventions</h1>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <figure>
                    <img src="ressources/img/d-1.jpg" class="d-block w-100" alt="...">
                    <figcaption style="color: brown;">Installation systèmes de vidéos surveillances, avec possibilité de
                        contrôle des caméras par smartphone</figcaption>
                </figure>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <figure>
                    <img src="ressources/img/d-2.jpg" class="d-block w-100" alt="...">
                    <figcaption style="color: brown;">Installation sécurisé de tout vos équipements de nature électrique
                        selon vos besoins </figcaption>
                </figure>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <figure>
                    <img src="ressources/img/d-3.jpg" class="d-block w-100" alt="...">
                    <figcaption style="color: brown;">
                        Vente de tout matériels électriques necessaire à vos travaux
                        domestiques ou professionnels
                    </figcaption>
                </figure>

            </div>

        </div>

        <div class="row">
            <!-- div text -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" id="black">
                <p>
                    Nous intervenons dans la vérification avant installation électriques pour sécuriser vos futurs installations et ainsi éviter
                    tout problèmes sur vos équipements électriques, nous éffectuons également tout installation électrique qui vous est nécessaire.
                    SEEB-MALI opère aussi dans la vente de matériels électriques, dans l'intallation de systèmes de vidéos surveillances,
                    dans l'intallation de panneaux solaires etc... <br><br>

                    <em>Pour plus d'informations, merci de nous contacter!</em>


                </p>

            </div>

            <!-- div info -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="red">

                <ul>                    
                    <li>
                        Vérifications et délivrances de visas conformité des installations électriques
                    </li>
                    <li>
                        Installation électrique
                    </li>
                    <li>
                        Sécurité électrique
                    </li>
                    <li>
                        Installations de panneaux solaires
                    </li>
                    <li>
                        Ventes de materiels électrique
                    </li>
                    <li>
                        Installation de système de vidéo surveillances
                    </li>
                    <li>
                        Informatiques
                    </li>
                </ul>
            </div>

        </div>

    </div>

    <hr>
    <hr>

    <div class="container" id="projects">
        <h1><i class="bi bi-terminal"></i> Projets</h1>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <img src="ressources/img/logement-sociaux.jpg" class="d-block w-100" alt="LOGEMENT SOCIAUX">
                <p>Installations électriques logement sociaux</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <img src="ressources/img/hotel-royal.jpg" class="d-block w-100" alt="HÔTEL ROYAL">
                <p>Contrôle et travaux de mise en conformité Hôtel Royal</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <img src="ressources/img/eni-abt.jpg" class="d-block w-100" alt="ENI-ABT">
                <p>Travaux de rénovations des locaux de l'Ecole Nationale d'Ingenieurs du Mali</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <img src="ressources/img/bcs.jpg" class="d-block w-100" alt="BCS-SA">
                <p>Contrôle de conformité des installations éléctriques BCS-SA</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <img src="ressources/img/becm-cg.jpg" class="d-block w-100" alt="BECM-CG">
                <p>Travaux d'installations électrique du siège de la BECM-CG Baguinéda</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <img src="ressources/img/bhm.jpg" class="d-block w-100" alt="BHM-SA ACI">
                <p>Installations de luminaires au sous-sol du siège de la BHM ACI</p>
            </div>

        </div>

        <div class="row">
            <!-- div text -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" id="black">
                <p>
                    Durant ses 16 ans d'existence, l'entreprise SEEB-MALI a réalisé plusieurs projets non seulement en
                    installation electrique mais
                    aussi en contrôle de conformité d'installations électriques domestiques et industrielles, également
                    des travaux de rénovations.

                    
                </p>
            </div>

            <!-- div info -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="red">

                <ul>
                    <li>
                        Travaux de rénovations des locaux de l'Ecole Nationale d'Ingenieurs du Mali (LABORATOIRES,
                        BUREAUX? SALLES DE CLASSES, AMPHIS)
                    </li>
                    <li>
                        Installations de luminaires au sous-sol du siège de la Banque de l'Habitat du Mali (BHM) au
                        siège de l'ACI à Bamako.
                    </li>
                    <li>
                        Travaux de mise en conformité des locaux de la Direction régionale de l'urbanisme et de
                        l'Habitat de Bamako.
                    </li>
                    <li>
                        Contrôle de conformité des installations éléctriques du siège de la Banque Commerciale pour le
                        Sahel (BCS-SA) au siège de Koutiala.
                    </li>
                    <li>
                        Contrôle et travaux de mise en conformité de l'Hôtel Royal de Bamako.
                    </li>
                    <li>
                        Travaux d'installations électrique du siège de la BECM-CG à Baguinéda.
                    </li>
                    <li>
                        Installations électriques de 29 logements sociaux à Yirimadjo/ Bamako.
                    </li>
                    <li>
                        Vérifications et délivrances de visas conformité des installations électrique intérieure dans le
                        district de Bamako en partenariat avec l'EDM-SA.
                    </li>
                </ul>

            </div>

        </div>

    </div>

    <hr>
    <hr>

    <!-- Contacts -->
    <div class="container" id="contacts">
        <div class="jumbotron" style="background-color: black; color: white;">

            <div class="row">
                <address class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <p>Contacts</p>
                    <strong>S.E.E.B-MALI</strong><br>
                    Lafiabougou Koda Rue 410<br>
                    Bamako/ Mali<br>
                    <i class="bi bi-envelope"></i> <a href="mailto:seebmalitoure@yahoo.fr">seebmalitoure@yahoo.fr</a><br>
                    <i class="bi bi-telephone"></i> <a href="tel:0022320290755">20290755</a> <br>
                    <i class="bi bi-telephone"></i> <a href="tel:0022376388245">76388245</a>
                </address>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2868.0209860914742!2d-8.044855143727021!3d12.620328644692075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDM3JzEyLjYiTiA4wrAwMic0MC42Ilc!5e0!3m2!1sfr!2sfr!4v1615907525665!5m2!1sfr!2sfr
                    width=" 600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                </iframe>

                

            </div>


        </div>
    </div>


    <footer class="container-fluid">
        <nav class="navbar navbar-dark bg-dark">
            <p>
                <center style="color: white;">Tout droits réservés SEEB-MALI</center>
            </p>
            <p>
                <center>
                    <img src="ressources/logo/logo_mini.png" class="img img-responsive" alt="SEEB-MALI">
                    <img src="ressources/logo/Acavie_mini.png" class="img img-responsive" alt="ACAVIE">
                </center>
            </p>
        </nav>

        <script src="styles/jquery/jquery.min.js"></script>
        <script src="styles/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="styles/script.js"></script>
    </footer>
    </div>

</body>

</html>