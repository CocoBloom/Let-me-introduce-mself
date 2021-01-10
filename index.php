<?php

include "App/RouteManager.php";

require_once("/home/virag/Projects/JobHunt/introduction-to-Prioris/vendor/autoload.php");

echo "Hello, World!";
RouteManager::init();
echo "parseurl:".parse_url($_SERVER['REQUEST_URI'])["path"] ?? "/";
$path = $_SERVER['REQUEST_URI'];
$requestType = $_SERVER['REQUEST_METHOD'];
Router::execute($path, $requestType);
