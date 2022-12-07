<?php

require __DIR__.'/functions.php'; //подключаем файл с функциями
$db = require __DIR__
              .'/database/ConnectionStart.php'; //подключаем файл с функциями для работы с БД

$posts = $db->getAll();

require __DIR__.'/index.view.php'; //подключаем файл с версткой
