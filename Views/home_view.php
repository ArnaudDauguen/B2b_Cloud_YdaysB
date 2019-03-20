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
                    <th>nom du ficher</th>
                </tr>
                
                <?php foreach ($files as $file){ ?>
                    <tr>
                        <td> <? echo $file['name'] ?></td>
                    </tr>

                <?php } ?>

            </table>

        </div>
    </div>
</body>
</html>