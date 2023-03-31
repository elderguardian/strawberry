<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require_once "autoloader.php";
require_once "SB.php";
require_once "routes.php";

if (!isset($routes)) {
    die(404);
}


$router = new Router($routes);

$router->route();