<?php



if(isset($_GET['delete_file'])){
    Home::delete_file($_SESSION['user_id'], $_GET['delete_file']);
}



$files = Home::get_files($_SESSION['user_id']);







?>