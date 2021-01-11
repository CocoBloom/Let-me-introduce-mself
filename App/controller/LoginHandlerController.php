<?php

include "./database/UserQueries.php";

class LoginHandlerController extends BaseController
{
    public function validateLogin(PDO $connection): bool {
        session_start();
        echo "loginhandler";
        //TODO NAMESPACE AND CHANGE THIS
        $users = UserQueries::getAllUsers($connection);
        var_dump($users);
        return true;
    }
}