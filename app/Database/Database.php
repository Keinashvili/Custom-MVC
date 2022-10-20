<?php

namespace app\app\Database;

use PDO;

class Database
{
    private $host = DB_HOST;
    private $db = DB_DATABASE;
    private $user = DB_USERNAME;
    private $pass = DB_PASSWORD;
    private $port = DB_PORT;

    protected static function pdo() : PDO
    {
        $static = new static();
        $pdo = new PDO('mysql:host='.$static->host.'; port='.$static->port.'; dbname='.$static->db,$static->user,$static->pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return self::$pdo;
    }
}