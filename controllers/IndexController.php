<?php
/**
 * Контроллер главной страницы
 * 
 */
// Подключение модели 
include_once '../models/CategoriesModel.php';

function testAction() {
    echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы сайта
 * 
 * 
 */
function indexAction($smarty,$link) {
    $rsCategories = getAllMainCatsWithChildren($link);
    
    $smarty -> assign('pageTitle', 'Главная страница сайта');
    
    // Функция для передачи данных в шаблон а также его загрузки и отработки
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}

