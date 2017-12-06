<!--// файл для хранения общих функция для всего сайта-->
<?php


function loadPage($controllerName, $actionName = 'index'){
    //Подключаем необходимый контроллер
    include_once PathPrefix.$controllerName.PathPostfix;
    
    $function = $actionName.'Action';
    $function();
}
