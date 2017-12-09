<!--// файл для хранения общих функция для всего сайта-->
<?php

 /**
  * Формирование запрашиваемой страницы
  * 
  * @param type $smarty         объект  шаблонизатора   
  * @param type $controllerName название контроллера
  * @param type $actionName     название функции обработки страницы
  */
  
 
function loadPage($smarty, $controllerName, $actionName = 'index'){
    //Подключаем необходимый контроллер
    include_once PathPrefix.$controllerName.PathPostfix;
    
    $function = $actionName.'Action';
    $function($smarty, connectToDB());
}
/**
 * Загрузка шаблона
 * 
 * @param type $smarty      
 * @param type $templateName название файла шаблона
 */
function loadTemplate($smarty, $templateName) {
    $smarty -> display($templateName.TemplatePostFix);
}

/**
 *  Функция отладки.Останавливает работу программы выводя значение переменной
 * $value
 * @param type $value
 * @param type $die
 */
function d($value = null, $die = 1) {
    echo 'Debug:<br/><pre>';
    print_r($value);
    echo '</pre>';
    
    if ($die) die;
}