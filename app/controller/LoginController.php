<?php

class LoginController extends BaseController
{
    public function run()
    {
        session_start();
        var_dump($_SESSION);
        echo file_get_contents('templates/login.php');
    }
}