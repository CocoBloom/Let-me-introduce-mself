<?php
namespace App\controller;

class LoginController extends BaseController
{
    public string $filename;
    public string $jsonSource;

    public function __construct($filename, $jsonSource)
    {
        parent::__construct();
        $this->filename = $filename;
        $this->jsonSource = $jsonSource;
    }

    public function run()
    {
        session_start();
        $this->getView()->render($this->filename, $this->jsonSource);
    }
}