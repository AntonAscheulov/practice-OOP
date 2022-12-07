<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $sql    = 'SELECT * FROM posts';
        $result = $this->pdo->query($sql);
        $posts  = $result->fetchAll(PDO::FETCH_ASSOC);

        return $posts;
    }

}