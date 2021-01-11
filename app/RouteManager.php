<?php

include 'framework/routes/Router.php';
include 'app/controller/MainPageController.php';
include 'app/controller/LoginController.php';
include 'app/controller/LoginHandlerController.php';
include 'app/controller/PrivateInfoController.php';
include 'app/controller/PublicInfoController.php';


class RouteManager
{
    public static function init(): void
    {

        Router::add('/', function () {
            $controller = new MainPageController();
            $controller->run();
        }, "GET");

        Router::add('/login', function () {
            $controller = new LoginController();
            $controller->run();
        }, "GET");

        Router::add('/login', function () {
            $controller = new LoginHandlerController();
            $controller->run();
        }, "POST");


        Router::add('/privateInfo', function () {
            $controller = new PrivateInfoController();
            $controller->run();
        }, "GET");

        Router::add('/publicInfos', function () {
            $controller = new PublicInfoController();
            $controller->run();
        }, "GET");



    }
}