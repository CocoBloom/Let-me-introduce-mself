<?php

include "database/Connection.php";

abstract class BaseController
{

    protected PDO $dbConnection;

    public function __construct()
    {
        try {
            $this->dbConnection = Connection::getConnection();
        } catch (Exception $exception) {
            echo "Failed to Collect data.";
        }
    }

    public function getConnection(): PDO
    {
        return $this->dbConnection;
    }

    abstract public function run();


}