<?php 
define('WEBROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]). 'app/');
define('BASEPATH', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));


use MVC\Config\core;
use MVC\Router;
use MVC\Request;
use MVC\Dispatcher;

require BASEPATH . '/vendor/autoload.php';
$dispatch = new Dispatcher();
$dispatch->dispatch();
 ?>