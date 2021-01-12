<?php
namespace App\controller;

use Framework\view\ViewTemplate;

class LogOutController extends BaseController
{

    public function run()
    {
        session_start();
        session_destroy();
        header('Location:/');
    }
}