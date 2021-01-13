<?php
namespace App\controller;

class PublicInfoController extends BaseController
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
        $this->getView()->render($this->filename, $this->jsonSource);
    }
}