<?php

include "database/Connection.php";

class BaseController
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

    public function run(string $filename)
    {
        // TODO: Implement run() method.
        session_start();
        echo file_get_contents($filename);
    }


}