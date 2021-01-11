<?php

include "app/RouteManager.php";

require_once("/home/virag/Projects/JobHunt/introduction-to-Prioris/vendor/autoload.php");


RouteManager::init();
$path = $_SERVER['REQUEST_URI'];
$requestType = $_SERVER['REQUEST_METHOD'];
Router::execute($path, $requestType);
