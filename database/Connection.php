<?php

class Connection
{

    public static function connect()
    {
        $pdo = new PDO(
          'mysql:host=127.0.0.1:3306; charset=utf8; dbname=app-a',
          'root',
          ''
        );
        return $pdo;
    }

}