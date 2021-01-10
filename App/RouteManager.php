<?php

include 'Framework/routes/Router.php';
include 'App/controller/MainPageController.php';
include 'App/controller/LoginController.php';
include 'App/controller/PrivateInfoController.php';
include 'App/controller/PublicInfoController.php';


class RouteManager
{
    public static function init(): void
    {

        Router::add('/', function () {
            $controller = new MainPageController();
            $controller->run();
        }, "GET");

        Router::add('/login', function () {
            echo "homepage";
        }, "GET");

        Router::add('/privateInfos', function () {
            echo "homepage";
        }, "GET");

        Router::add('/publicInfos', function () {
            echo "homepage";
        }, "GET");

        var_dump( Router::$routes);

    }
}