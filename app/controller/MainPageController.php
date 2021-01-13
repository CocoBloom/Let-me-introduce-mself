<?php

namespace App\controller;

class MainPageController extends BaseController
{
    protected string $filename;

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