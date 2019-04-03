<?php
    

    if(isset($_POST['email']) and isset($_POST['password'])){
        $password = $_POST['password'];
        $email = $_POST['email'];

        $errors;
        
        //get potential user
        $requested_user = Accueil::getUsers($email);
        
        if(!$requested_user){
            $errors['1'] = "Unknown user";
        }
        if(!password_verify($password, $requested_user['password'])){
            $errors['2'] =  "Wrong password!";
        }

        if(isset($errors['1']) or isset($errors['2'])){
            print_r($errors);
            return false;
        }else{
            //so, all is good
            print_r($errros);
            $_SESSION['user_id'] = $requested_user['id'];
            $_SESSION['logged'] = true;

            header("Location: " . PATH . $_SESSION['come_from']);
            return true;
        }
        
    }
