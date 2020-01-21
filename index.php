<?php
require_once './vendor/autoload.php';
require './config/config.php';

error_reporting(E_ALL); ini_set('display_errors', 1); 

use App\Cores\Dispatch;
require_once 'app/Controller/HomeController.php';
require_once 'app/Controller/LoginController.php';
require_once 'app/Controller/ErrorController.php';
$d = new Dispatch();

?>
