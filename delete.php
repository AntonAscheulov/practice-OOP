<?php
require __DIR__.'/functions.php'; //подключаем файл с функциями
$db = require __DIR__.'/database/ConnectionStart.php'; //подключаем файл с функциями для работы с БД

$id = $_GET['id'];

$db->delete('posts', $id);

header('location: /index.php');