<?php

/**
 * Модель для таблицы категорий(categories)
 * 
 */

/**
 * Получить дочернии категории для категории $catId
 * @param type $link объект для  подключения к бд
 * @param integer $catId ID категорий
 * @return array массив дочерних категорий
 */
function getChildrenForCat($link, $catId) {
       $sql = 'SELECT * '
            . 'FROM `categories`'
            . 'WHERE '
            . 'parent_id = \''.$catId.'\'';
       
       $rs = $link -> query($sql);
       
       return createSmartyRsArray($rs);
}



/**
 * Получить главные категории с привязками дочерних
 * @param type $link объект для  подключения к бд
 * @return type массив с категориями
 */
function getAllMainCatsWithChildren($link) {
    
       $sql = 'SELECT * '
           . 'FROM `categories`'
           . 'WHERE parent_id = 0';
   $rs = $link->query($sql);
   
   $smartyRs = array();
   while ($row = mysqli_fetch_assoc($rs)) {
       $rsChildren = getChildrenForCat($link, $row['id']);
       
        if($rsChildren){
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
   }
   return $smartyRs;
}
