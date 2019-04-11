<?php


    if(isset($_FILES['file']) and !empty($_FILES['file'])){
        $error = $_FILES['file']['error'];
        if ($error !== 0) {
            echo "There are some errors";
        }

        $origin_path = $_FILES['file']['tmp_name'];

        $hash = hash_file('md5', $origin_path);


        $file_already_uploaded = false;
        if(!empty(AddFile::checkExistingFile($hash))){
            //file already exist
            $file_already_uploaded = true;
        }
        $destination = "./files/" . $hash;
        $_FILES['file']['tmp_name'] = $destination;

        if(!file_exists("./files")){
            mkdir("./files", 0777, true);
        }

        if(!$file_already_uploaded){
            AddFile::uploadFile($_FILES['file']['name'], $hash);
            move_uploaded_file($origin_path, $destination);
        }
        $id_new_file = AddFile::checkExistingFile($hash)['id'];
        if($id_new_file != null){
            AddFile::updateHave(intval($_SESSION['user_id']), $id_new_file);
            Header("Location:" . PATH . "/home");
        }else{
            echo "import failled";
        }



    }




?>