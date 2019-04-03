<?php

class Home {

    public static function getFiles($user_id) {
        global $pdo;

        $query = 'SELECT * FROM files WHERE id IN (SELECT * FROM have WHERE id_user = (:user_id))';
        $datas = [
            ':user_id' => $user_id,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        $files = $query->fetchAll();

        return $files;
    }


    public static function tru(){

    }
        
}









?>