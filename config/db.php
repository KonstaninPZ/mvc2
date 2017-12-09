<?php

/**
 * Инициализация подключения к БД
 */

// соединяемся с БД
function connectToDB() {
    $data_connect = array(
                        'dblocation' => "127.0.0.1",
                        'dbname' => "myshop",
                        'dbuser' => "root",
                        'dbpasswd' => "fakultet",
                        ); 
    $db = new mysqli($data_connect['dblocation'], $data_connect['dbuser'],
                    $data_connect['dbpasswd'],$data_connect['dbname']);
    if(!$db){
        echo 'Ошибка доступа к MySQL';
        exit();
    } else {
        return $db;    
    }
}





