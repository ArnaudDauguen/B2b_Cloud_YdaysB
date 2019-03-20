<?php
//ERRORS DISPLAY
error_reporting(E_ALL);
ini_set('display_errors', true);


//SESSIONS
ini_set('session.cookie_lifetime', false);
session_start();
$_SESSION['come_from'] = 'home';


//GLOBALS
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9));









?>