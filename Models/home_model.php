<?php

class Home {

    public static function get_files($user_id) {
        global $pdo;

        $query = 'SELECT * FROM files WHERE id IN (SELECT id_file FROM have WHERE id_user = (:user_id))';
        $datas = [
            ':user_id' => $user_id,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        $files = $query->fetchAll();

        return $files;
    }


    public static function delete_file($user_id, $file_id){
        global $pdo;

        //on check le nombre d'user ayant ce fichier
        $query = 'SELECT DISTINCT id FROM have WHERE id_file = (:file_id))';
        $datas = [
            ':file_id' => $file_id,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        $users = $query->fetchAll();
        $nb_users = sizeof($users);


        //quoi qu'il en soit, on delete le lien user - fichier
        $query = 'DELETE FROM have WHERE id_user = (:user_id) AND id_file = (:file_id)';
        $datas = [
            ':user_id' => $user_id,
            ':file_id' => $file_id,
        ];

        $query = $pdo->prepare($query);
        $query->execute($datas);
        $files = $query->fetchAll();


        // suppression réel du fichier
        if($nb_users <= 1){
            // sur le disque
            $query = 'SELECT hash FROM files WHERE id = (:file_id)';
            $datas = [
                ':file_id' => $file_id,
            ];
    
            $query = $pdo->prepare($query);
            $query->execute($datas);
            $hash = $query->fetch();

            unlink("./files/" . $hash['hash']);


            // BDD
            $query = 'DELETE FROM files WHERE id = (:file_id)';
            $datas = [
                ':file_id' => $file_id,
            ];
    
            $query = $pdo->prepare($query);
            $query->execute($datas);
            $files = $query->fetchAll();

            


        }


    }
        
}









?>