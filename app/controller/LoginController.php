<?php
namespace App\controller;

class LoginController extends BaseController
{
    public string $filename;

    public function __construct($filename)
    {
        parent::__construct();
        $this->filename = $filename;
    }

    public function run()
    {
        session_start();
        $this->getView()->render($this->filename, []);
    }
}