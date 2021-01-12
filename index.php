<?php


use App\RouteManager;
use Framework\routes\Router;

require_once("vendor/autoload.php");


RouteManager::init();
$path = $_SERVER['REQUEST_URI'];
$requestType = $_SERVER['REQUEST_METHOD'];
Router::execute($path, $requestType);
