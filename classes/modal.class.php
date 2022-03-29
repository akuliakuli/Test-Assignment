<?php

class Modal extends Connection{
    public function getItems($name){
        $sql ="SELECT * FROM products WHERE name = ?";
        $stmt = $this ->connect() -> prepare($sql);
        $stmt -> execute([$name]);
        $result = $stmt ->fetchAll();
        return $result;
    }
    public function addItems($sku,$name,$price,$attr){
        $sql = "INSERT INTO products(SKU,name,price,attr) VALUES (?,?,?,?)";
        $stmt = $this ->connect() ->prepare($sql);
        $stmt ->execute($sku,$name,$price,$attr);
    }
}