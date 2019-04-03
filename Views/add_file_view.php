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



            <form action="" method="post" enctype="multipart/form-data">
                <p> Upload a File
                    <input type="file" name="file" />
                    <input type="submit" value="Send" />
                </p>
            </form>



        </div>
    </div>
</body>
</html>