<?php
function connectToDB(){
    $pdo = new PDO('mysql:host=127.0.0.1:3306; charset=utf8; dbname=app-a', 'root', '');
    return $pdo;
}


function dd ($data){
    echo '<pre>' . var_export($data, true) . '</pre>';
}
