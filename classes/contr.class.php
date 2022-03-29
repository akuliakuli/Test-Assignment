<?php

class Contr extends Modal{
    public function sendItemToDB($sku,$name,$price,$attr){
        $this ->addItems($sku,$name,$price,$attr);
    }
}