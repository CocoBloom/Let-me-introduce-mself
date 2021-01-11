<?php

include 'Framework/routes/Router.php';
include 'App/controller/MainPageController.php';
include 'App/controller/LoginController.php';
include 'App/controller/LoginHandlerController.php';
include 'App/controller/PrivateInfoController.php';
include 'App/controller/PublicInfoController.php';


class RouteManager
{
    public static function init(): void
    {

        Router::add('/', function () {
            $controller = new BaseController();
            $controller->run("templates/mainPage.php");
        }, "GET");

        Router::add('/login', function () {
            $controller = new BaseController();
            $controller->run("templates/login.php");
        }, "GET");

        Router::add('/login', function () {
            $controller = new LoginHandlerController();
            $f = $controller->validateLogin();
            echo $f;
            $controller->run($f ? "templates/mainPage.php" : "templates/login.php");
        }, "POST");



        Router::add('/privateInfo', function () {
            $controller = new BaseController();
            $controller->run("templates/privateInfo.php");
        }, "GET");

        Router::add('/publicInfos', function () {
            $controller = new BaseController();
            $controller->run("templates/publicInfo.php");
        }, "GET");



    }
}