<?php

class Contr extends Modal{
    public function sendItemToDB($sku,$name,$price,$attr){
        $this ->add($sku,$name,$price,$attr);
    }

}