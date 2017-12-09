<?php

/**
 * Модель для таблицы категорий(categories)
 * 
 */

function getAllMainCatsWithChildren($link) {
    
       $sql = 'SELECT * '
           . 'FROM `categories`'
           . 'WHERE parent_id = 0';
   $rs = $link->query($sql);
   while ($row = mysqli_fetch_assoc($rs)) {
          d($row); 
   }
 
}
