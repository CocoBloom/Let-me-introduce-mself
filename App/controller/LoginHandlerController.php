<?php


class LoginHandlerController extends BaseController
{
    public function validateLogin(): bool {
        session_start();
        echo "hellobello";
        echo $_POST['email'];
        return true;
    }
}