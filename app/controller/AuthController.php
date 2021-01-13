<?php


namespace App\controller;

use Framework\routes\Router;

class AuthController
{

    public static function checkAuth(): bool
    {
        session_start();
        return isset($_SESSION['name']);
    }

    public static function redirectToLogin() {
        session_start();
        $loginController = Router::getRoutes()['/loginGET'];
        $loginController->execute();
    }
}