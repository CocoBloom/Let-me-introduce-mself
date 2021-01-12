<?php
namespace App\controller;

use Framework\database\Connection;
use Framework\view\ViewTemplate;
use PDO;

abstract class BaseController
{

    protected PDO $dbConnection;
    protected ViewTemplate $viewTemplate;

    public function __construct()
    {
        try {
            $this->dbConnection = Connection::getConnection();
            $this->viewTemplate = new ViewTemplate();
        } catch (Exception $exception) {
            echo "Failed to Collect data.";
        }
    }

    public function getConnection(): PDO
    {
        return $this->dbConnection;
    }

    public function getView(): ViewTemplate
    {
        return $this->viewTemplate;
    }

    abstract public function run();


}