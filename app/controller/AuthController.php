<?php


namespace App\controller;

use Framework\routes\Router;

class AuthController
{


    public static function checkAuth(): bool
    {
        session_start();
        return isset($_SESSION['email']);
    }

    public static function redirectToLogin() {
        $loginController = Router::getRoutes()['/loginGET'];
        var_dump($loginController);
        $loginController->execute();
    }
}