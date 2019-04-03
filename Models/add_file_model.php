<?php

class AddFile {

    public static function checkExistingFile(String $hash){
        global $pdo;

        $query = 'SELECT * FROM files WHERE hash = (:hash)';
        $datas = [
            ':hash' => $hash,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        $files = $query->fetch();

        return $files;
    }

    public static function uploadFile(String $name, String $hash){
        global $pdo;

        $query = 'INSERT INTO files (name, hash) VALUES ((:name), (:hash))';
        $datas = [
            ':name' => $name,
            ':hash' => $hash,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        $query->fetch();

    }

    public static function updateHave(int $user_id, int $file_id){
        global $pdo;

        $query = 'INSERT INTO have (id_user, id_file) VALUES ((:user_id), (:file_id))';
        $datas = [
            ':user_id' => $user_id,
            ':file_id' => $file_id,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        $query->fetch();

    }

}











?>