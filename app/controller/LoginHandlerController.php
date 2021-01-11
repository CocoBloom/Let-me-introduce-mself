<?php

include "app/model/UserQueries.php";

class LoginHandlerController extends BaseController
{

    public function run()
    {
        if ($this->validateLogin()) {
            header("Location:/");
        } else {
            echo file_get_contents('templates/login.php');
        }
    }

    public function validateLogin(): bool
    {
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];
        $users = UserQueries::getAllUsers($this->getConnection());

        foreach ($users as $user) {
            if ($user->email == $email && password_verify($password, $user->password)) {
                return true;
            }
        }
        return false;
    }

}