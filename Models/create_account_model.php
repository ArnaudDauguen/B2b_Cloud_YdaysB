<?php



class CreateAccount {

    public static function getNumberUsersByEmail(String $email){
        global $pdo;

        $query = 'SELECT * FROM users WHERE email = (:email)';
        $datas = [
            ':email' => $email,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        $requested_user = $query->fetchAll();

        return sizeof($requested_user);

    }

    public static function getNumberUsersByPseudo(String $pseudo){
        global $pdo;

        $query = 'SELECT * FROM users WHERE pseudo = (:pseudo)';
        $datas = [
            ':pseudo' => $pseudo,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        $requested_user = $query->fetchAll();

        return sizeof($requested_user);

    }


    public static function createUser(String $email, String $pseudo, String $password_hash){
        global $pdo;

        $query = 'INSERT INTO users (pseudo, email, password) VALUES ((:pseudo), (:email), (:password))';
        $datas = [
            ':email' => $email,
            ':pseudo' => $pseudo,
            ':password' => $password_hash,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        return $query->fetch();
    }

}


?>