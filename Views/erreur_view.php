<!doctype html>
<html lang="fr">
<head>

    <?php include_once 'Views/includes/head.php'?>
    <title><?= ucfirst($page) ?></title>
</head>

<body>

    <?php include_once 'Views/includes/header.php'?>
    <div class="container text-center mt-4">
        <div class="row justify-content-center">
            <h1>Erreur 404 ! Cette page n'existe pas !</h1>
        </div>
        <?php if(isset($_SESSION['logged'])){ ?>
            <a href="<?= PATH ?>home"><button class="btn btn-primary btn-lg mt-4">Revenir sur le site</button></a>
        <?php }else{ ?>
            <a href="<?= PATH ?>accueil"><button class="btn btn-primary btn-lg mt-4">Revenir sur le site</button></a>
        <?php }?>
    </div>
</body>
</html>