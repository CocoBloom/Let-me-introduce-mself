<?php

namespace App;

use App\controller\AuthController;
use App\controller\LogOutController;
use Framework\routes\Router;
use App\controller\MainPageController;
use App\controller\LoginController;
use App\controller\LoginHandlerController;
use App\controller\PrivateInfoController;
use App\controller\PublicInfoController;

class RouteManager
{
    public static function init(): void
    {
        Router::add('/', function () {
            $controller = new MainPageController("templates/mainPage.php", 'resources/main.json');
            $controller->run();
        }, false, "GET");

        Router::add('/login', function () {
            $controller = new LoginController("templates/login.php", 'resources/login.json');
            $controller->run();
        }, false,"GET");

        Router::add('/login', function () {
            $controller = new LoginHandlerController("templates/login.php", 'resources/login.json');
            $controller->run();
        }, false,"POST");

        Router::add('/logout', function () {
            $controller = new LogOutController();
            $controller->run();
        }, false, "GET");

        Router::add('/privateInfo', function () {
            if (AuthController::checkAuth()) {
                $controller = new PrivateInfoController("templates/privateInfo.php", 'resources/private.json');
            } else {
                $controller = new PrivateInfoController("templates/login.php", 'resources/login.json');
            }
            $controller->run();
        }, true,"GET");

        Router::add('/publicInfo', function () {
            $controller = new PublicInfoController("templates/publicInfo.php", 'resources/public.json');
            $controller->run();
        }, false,"GET");



    }
}