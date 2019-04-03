<?php

    if(isset($_POST['pseudo']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['password_confirm'])){

        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password_confirm'];

        $errors;


        if(CreateAccount::getNumberUsersByEmail($email) > 0){
            $errors['1'] = 'This email is already used';
        }

        if(CreateAccount::getNumberUsersByPseudo($pseudo) > 0){
            $errors['2'] = 'This pseudo is already used';
        }

        if($password !== $password2){
            $errors['3'] = 'Passwords doesn\'t match';
        }

        if(isset($errors['1']) or isset($errors['2']) or isset($errors['3'])){
            print_r($errors);
            return false;
        }else{
            //all good
            $password_hash = password_hash($password, 1);

            CreateAccount::createUser($email, $pseudo, $password_hash);
            header("Location: " . PATH . "login");
            return true;
        }
    }




?>