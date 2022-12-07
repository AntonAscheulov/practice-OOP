<?php
require __DIR__.'/QueryBuilder.php'; //подключаем класс БД
require __DIR__.'/Connection.php'; //подключаем класс соединения с БД

return new QueryBuilder(Connection::connect());