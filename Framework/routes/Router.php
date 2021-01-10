<?php

use BK_Framework\Router\Route;

class Router
{
//    TODO change back private
    public static array $routes = Array();

    public static function add(string $endpoint, $method, string $requestType)
    {
        array_push(self::$routes, new Route($endpoint, $method, $requestType));
    }

    public static function execute($path, $requestType)
    {
    }


}