<?php
/**
 * Контроллер главной страницы
 * 
 */
// Подключение моделей 
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

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
    $rsProducts = getLastProducts(16,$link);
    
    $smarty -> assign('pageTitle', 'Главная страница сайта');
    $smarty -> assign('rsCategories', $rsCategories);
    // передаём продукцию полученную в getLastProducts
    $smarty -> assign('rsProducts', $rsProducts);
    
    // Функция для передачи данных в шаблон а также его загрузки и отработки
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}

