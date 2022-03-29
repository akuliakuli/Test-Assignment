<?php

class View extends Modal{
   public function showItems($id){
       $result = $this ->getItems($id);
       echo $result['name'];
   }
}