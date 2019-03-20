<?php

class Accueil {

    public static function getUsers(String $email){
        global $pdo;

        $query = 'SELECT * FROM users WHERE email = (:email)';
        $datas = [
            ':email' => $email,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        $requested_user = $query->fetch();

        return $requested_user;

    }
}