<?php

namespace Framework\routes;

use App\controller\AuthController;

class Router
{
//    TODO change back private
    private static array $routes = Array();

    public static function add(string $endpoint, $method, bool $authIsNecessary, string $requestType)
    {
        self::$routes[$endpoint.$requestType] = new Route($endpoint, $method, $authIsNecessary,$requestType);
    }

    public static function execute($endpoint, $requestType)
    {
        $routeExists = true;

        foreach (self::$routes as $route) {
            if($route->getEndPoint() === $endpoint) {
                if (!$route->getRouteDatas['authIsNecessary']) {
                    if ($requestType === $route->getRequestType()) {
                        $route->execute();
                        return;
                    }
                } else {
                    if (AuthController::checkAuth()) {
                        $route->execute();
                        return;
                    } else {
                        AuthController::redirectToLogin();
                    }
                }
            } else {
                $routeExists = false;
            }
        }

        if (!$routeExists) header("HTTP/1.0 404 Not Found");
    }

    public static function getRoutes(): array
    {
        return self::$routes;
    }



}