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
                        <label>Enter your email </label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label>Enter your pseudo </label>
                        <input type="text" class="form-control" name="pseudo" id="pseudo" required>
                    </div>
                    <div class="form-group">
                        <label>Enter your password </label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <label>Confirm password </label>
                        <input type="password" class="form-control" name="password_confirm" id="password_confirm" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Account</button>
                </form>


            </div>
        </div>
    </body>
</html>