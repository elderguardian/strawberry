<?php

require_once "autoloader.php";
require_once "routes.php";

if (!isset($routes)) {
    die(404);
}


$router = new Router($routes);

$router->route();