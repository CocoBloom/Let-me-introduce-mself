<?php

use App\RouteManager;
use Framework\routes\Router;

require_once("vendor/autoload.php");

RouteManager::init();
$path = $_SERVER['REQUEST_URI'];
$requestType = $_SERVER['REQUEST_METHOD'];
var_dump($_SESSION['name']);
Router::execute($path, $requestType);
