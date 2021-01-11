<?php

include "Route.php";

class Router
{
//    TODO change back private
    public static array $routes = Array();

    public static function add(string $endpoint, $method, string $requestType)
    {
        array_push(self::$routes, new Route($endpoint, $method, $requestType));
    }

    public static function execute($endpoint, $requestType)
    {
        $routeExists = true;
        foreach (self::$routes as $route) {
            if($route->getEndPoint() === $endpoint) {
                if ($requestType === $route->getRequestType()) {
                    $route->execute();
                    return;
                }
            } else {
                $routeExists = false;
            }
        }

        // If path wasn't found
        if (! $routeExists) header("HTTP/1.0 404 Not Found");
    }


}