<?php

class Connection
{

    public static function connect($config)
    {
        $pdo = new PDO(
          "{$config['dns']}; charset={$config['charset']}; dbname={$config['dbname']}",
          $config['username'],
          $config['password'],
        );
        return $pdo;
    }

}