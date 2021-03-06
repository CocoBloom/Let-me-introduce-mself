<?php

namespace Framework\database;

use PDO;

class Connection
{

    public static function getConnection(): PDO
    {
        $host = 'localhost';
        $user = 'Virag';
        $password = 'coco';
        $dbname = 'IntroMyself';
        $dsn = "mysql:host=" . $host . ";dbname=" . $dbname;
        $conn = new PDO($dsn, $user, $password);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $conn;
    }

}