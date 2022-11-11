<?php

namespace app\Database;

use PDO;

class Database
{
    private string $host = DB_HOST;
    private string $db = DB_DATABASE;
    private string $user = DB_USERNAME;
    private string $pass = DB_PASSWORD;
    private string $port = DB_PORT;

    protected static function pdo(): PDO
    {
        $static = new static();
        $dsn = 'mysql:host=' . $static->host;
        $pdo = new PDO($dsn . '; port=' . $static->port . '; dbname=' . $static->db, $static->user, $static->pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }

    public static function showTables()
    {
        $static = new static();
        $connect = $static->pdo();
        $query = $connect->prepare('show tables');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_NUM);
    }
}
