<?php 
include_once '../config/config.php';    //Инициализация настроек
include_once '../library/mainFunctions.php';    //Основные функции
// определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller'])? ucfirst($_GET['controller']):
                                                                     'Index';
//d($controllerName); 
//Определяем какая функция будет формировать страницу
$actionName = isset($_GET['action'])? $_GET['action']:'index';

loadPage($smarty, $controllerName, $actionName);