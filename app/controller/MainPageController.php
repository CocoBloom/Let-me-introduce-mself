<?php
include 'BaseController.php';

class MainPageController extends BaseController
{

    public function run()
    {
        session_start();
        echo file_get_contents('templates/mainPage.php');
    }

}