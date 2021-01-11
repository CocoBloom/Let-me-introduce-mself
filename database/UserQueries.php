<?php


class UserQueries
{
    public static function getAllUsers(PDO $connection)
    {
        $sql = 'SELECT * FROM user';
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}