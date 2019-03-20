<!doctype html>
<html lang="fr">
    <head>

        <?php include_once 'Views/includes/head.php'?>
        <title><?= ucfirst($page) ?></title>
    </head>

    <body>

        <div class="container text-center mt-4">
            <div class="row justify-content-center">


                <form action="" method="POST" class="form">
                    <div class="form-group">
                        <label for="name">Enter your email: </label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Enter your password: </label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>


            </div>
        </div>
    </body>
</html>