<?php

abstract class Modal extends Connection{
    protected function getItems($id){
        $sql = "SELECT * FROM products WHERE id > ?";
        $stmt = $this ->connect() -> prepare($sql);
        $stmt ->execute([$id]);
        $result = $stmt ->fetchAll();
        return $result;
    }
    protected function add($sku,$name,$price,$attr){
        $sql = "INSERT INTO products (sku, name, price, attr, id)VALUES (?,?,?,?)";
        $stmt = $this ->connect() ->prepare($sql);
        $stmt ->execute([$sku,$name,$price,$attr]);
    }
}