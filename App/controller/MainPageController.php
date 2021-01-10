<?php
include 'BaseController.php';

class MainPageController extends BaseController
{

    public function run()
    {
        echo "mainpagecontroller";
        // TODO: Implement run() method.
        session_start();
        echo file_get_contents("../templates/mainPage");
    }
}