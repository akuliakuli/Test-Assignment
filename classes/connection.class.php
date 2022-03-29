<?php

class Connection{
    private $host = "hostname";
    private $user = "root";
    private $pass = "";
    private $db = "Product_Storage";
    protected function connect(){
        $dsn = "mysql: host =" . $this ->host . "; dbname =" . $this ->db;
        $pdo = new PDO($dsn,$this->user,$this->pass);
        $pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $pdo;
    }
}