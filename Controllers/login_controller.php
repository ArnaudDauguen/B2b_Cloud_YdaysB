<?php
    

    if(isset($_POST['email']) and isset($_POST['password'])){
        $password = $_POST['password'];
        $email = $_POST['email'];

        
        //get potential user
        $requested_user = Accueil::getUsers($email);
        
        if(!$requested_user){
            return "Unknown user";
        }
        if(!password_verify($password, $requested_user['password'])){
            return "Wrong password!";
        }
        var_dump($errors);
        //so, all is good
        $_SESSION['user_id'] = $requested_user['id'];
        $_SESSION['logged'] = true;

        header("Location: " . PATH . $_SESSION['come_from']);
        return true;
        
    }
