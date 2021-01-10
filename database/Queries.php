<?php


class Queries
{
    public function getAllUsers(): array
    {
        $connetcion = Connection::getConnection();
        var_dump($connetcion);
        $sql = 'SELECT * FROM user';
        $stmt = $connetcion->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}