<?php
require __DIR__.'/functions.php'; //подключаем файл с функциями
require __DIR__.'/database/QueryBuilder.php'; //подключаем класс БД

$pdo = connectToDB();
$db = new QueryBuilder($pdo);
$posts = $db->getAll();


require __DIR__.'/index.view.php'; //подключаем файл с версткой
