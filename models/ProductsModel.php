<?php

/**
 * Модель для таблицы продукции(products)
 * 
 */

/**
 * Получаем последние добавленные товары
 * @param integer $limit количество товаров
 * @param type $link объект подключения к бд 
 * @return array Массив товаров
 */
function getLastProducts($limit = null, $link) {
    $sql = "SELECT * "
            . "FROM `products` "
            . "ORDER BY id DESC";
    if($limit){
        $sql.=" LIMIT {$limit}";
    }
    
    $rs = $link -> query($sql);
    
    return createSmartyRsArray($rs);
}