<!doctype html>
<html lang="fr">
    <head>

        <?php include_once 'Views/includes/head.php'?>
        <title><?= ucfirst($page) ?></title>
    </head>

    <body>
        <?php if(isset($_SESSION['logged'])){ if($_SESSION['logged']){
            include_once 'Views/includes/header.php';
        }} ?>
        <div class="container text-center mt-4">
            <div class="row justify-content-center">
                <?php if(!isset($_SESSION['logged'])){ ?>

                <span><a href="<?= PATH ?>login">Connexion</a></span>
                <span><a href="<?= PATH ?>create_account">Vous n'avez pas de compte ?</a></span>

                <?php } ?>

            </div>
        </div>
    </body>
</html>
