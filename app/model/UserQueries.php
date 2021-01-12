<?php
namespace App\model;

use PDO;

class UserQueries
{
    public static function getAllUsers(PDO $connection): array
    {
        $sql = 'SELECT * FROM user';
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}