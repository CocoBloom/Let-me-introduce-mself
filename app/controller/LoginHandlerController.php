<?php

namespace App\controller;

use App\model\UserQueries;
use Framework\view\ViewTemplate;
use PDO;


class LoginHandlerController extends BaseController
{
    protected string $filename;
    protected string $jsonSource;

    public function __construct($filename, $jsonSource)
    {
        parent::__construct();
        $this->filename = $filename;
        $this->jsonSource = $jsonSource;
    }

    public function run()
    {
        session_start();

        if ($this->validateLogin()) {
            header("Location:/");
        } else {
            $this->getView()->render($this->filename, $this->jsonSource);
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
                $this->setSession($user->name, $email);
                return true;
            }
        }
        return false;
    }

    public function setSession(string $name, string $email)
    {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
    }

}