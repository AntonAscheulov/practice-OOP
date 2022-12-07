<?php

require __DIR__.'/QueryBuilder.php'; //подключаем класс БД
require __DIR__.'/Connection.php'; //подключаем класс соединения с БД
//require __DIR__.'../config.php'; //подключаем файл с конфигом
$config =  include 'config.php';

return new QueryBuilder(Connection::connect($config['database']));