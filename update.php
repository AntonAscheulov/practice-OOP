<?php
require __DIR__.'/functions.php'; //подключаем файл с функциями
$db = require __DIR__.'/database/ConnectionStart.php'; //подключаем файл с функциями для работы с БД

$db->update('posts',$_POST,$_GET['id']);

header('location: /index.php');

