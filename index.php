<?php
    

$allPages = scandir('Controllers/');

if(isset($_GET['page'])){
    if(in_array($_GET['page'] . '_controller.php', $allPages)){
        include_once('Controllers/' . $_GET['page'] . '_controller.php');
        include_once('Models/' . $_GET['page'] . '_model.php');
        include_once('Views/' . $_GET['page'] . '_view.php');
    }else{
        include_once('Controllers/erreur_controller.php');
        include_once('Models/erreur_model.php');
        include_once('Views/erreur_view.php');
    }
}else{
    include_once('Controllers/accueil_controller.php');
    include_once('Models/accueil_model.php');
    include_once('Views/accueil_view.php');
}




