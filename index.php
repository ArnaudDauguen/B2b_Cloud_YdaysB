<?php

    // Inclusion des fichiers principaux
    include_once '_config/config.php';
    include_once '_config/db.php';
    include_once '_functions/functions.php';

    // Définition de la page courante
    if (isset($_GET['page']) AND !empty($_GET['page'])) {
        $page = trim(strtolower($_GET['page']));
    } else {
        $page = 'accueil';
    }

    // Tableau contenant toutes les pages
    $allPages = scandir('Controllers/');

    // Vérification de l'existence de la page
    if (in_array($page.'_controller.php', $allPages)) {

        // Connexion à la base de données
        include_once '_config/db.php';

        // Inclusion de la page
        include_once 'Models/'.$page.'_model.php';
        include_once 'Controllers/'.$page.'_controller.php';
        include_once 'Views/'.$page.'_view.php';
    } else {

        // Inclusion de la page erreur
        include_once 'Models/erreur_model.php';
        include_once 'Controllers/erreur_controller.php';
        include_once 'Views/erreur_view.php';
    }