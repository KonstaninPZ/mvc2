<?php 
include_once '../config/config.php';    //Инициализация настроек
include_once '../library/mainFunctions.php';    //Основные функции

$controllerName = isset($_GET['controller'])? ucfirst($_GET['controller']):
                                                                        'Index';
$actionName = isset($_GET['action'])? $_GET['action']:'index';

loadPage($controllerName,$actionName);