<?php

class PublicInfoController extends BaseController
{

    public function run()
    {
        session_start();
        echo file_get_contents("templates/publicInfo.php");
    }
}