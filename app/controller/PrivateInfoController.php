<?php

class PrivateInfoController extends BaseController
{
    public function run()
    {
        session_start();
        var_dump($_SESSION);
        session_start();
        echo file_get_contents("templates/privateInfo.php");
    }
}