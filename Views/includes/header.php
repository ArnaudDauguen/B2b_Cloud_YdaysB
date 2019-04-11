<?php
    if(!isset($_SESSION['user_id'])){
        header('Location:' . PATH);
    }


?>

<header>
    <div class="menu">
        <a class="link" href="<?= PATH ?>home">Vos fichiers</a>
        <a class="link" href="<?= PATH ?>add_file">Uploader un fichier</a>
        <a class="link" href="<?= PATH ?>contact">Contact</a>
        <a class="link" href="<?= PATH ?>logout">Deconnexion</a>
    </div>
</header>