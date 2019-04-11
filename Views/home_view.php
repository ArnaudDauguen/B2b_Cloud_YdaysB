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

            <table>
                <tr>
                    <th>file name</th>
                </tr>
                
                <?php foreach ($files as $file){?>
                    <tr>
                        <td> <?php echo $file['name'] ?></td>
                        <td><a href="files/<?= $file['hash']; ?>" id="btn-download" download= "<?= $file['name'] ?>">Télécharger</a></td>
                        <td><a href="./home?delete_file= <?= $file['id']; ?>"><img src="<?php echo "./assets/img/la_belle_poubelle.png"?>"/></a></td>
                    </tr>

                <?php } ?>

            </table>

        </div>
    </div>
</body>
</html>