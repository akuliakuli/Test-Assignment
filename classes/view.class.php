<?php

class View extends Modal{

    public function showItems($id){
        $result = $this ->getItems($id);
        foreach($result as $res){
            echo '<div class ="item">'.
            '<input type ="checkbox" class ="delete-checkbox">'.
            '<div class ="item-menu">'.
            '<h1>' . $res['sku'] . '</h1>'.
            '<h1>' . $res['name'] . '</h1>'.
            '<h1>' . $res['price'] . '</h1>'.
            '<h1>' . $res['attr'] . '</h1>'.
            '</div>'.
            '</div>';
        }
   }
}