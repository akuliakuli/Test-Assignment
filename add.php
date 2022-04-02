<?php
    include  "includes/autoload.inc.php";
    include "classes/option.class.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name ="author" content = "me">
    <title>ScandiWeb test</title>
    <link rel ="stylesheet" href ="main.css">
</head>
<body>
<script defer src ="script.js"></script>
<form id = "product-form" method ="POST" action = "add.php">
<header>
    <p>Product Add</p>
    <div class ="buttons">
        <button type ="submit"><a href = "index.php">SAVE</a></button>
        <button>CANCEL</button>    
</div>
</header>
    <div class ="input-menu">
       <p>SKU</p>
       <input type ="text" placeholder="#sku" id = "sku" name  = "sku">
</div>
    <div class ="input-menu">
        <p>Name</p>
        <input type ="text" placeholder="#name" id = "name" name  = "name">
    </div>
<div class ="input-menu">
    <p>Price</p>
    <input type ="text" placeholder="#price" id = "price" name  = "price">
</div>
<div class ="input-menu">
    <p>Type Switcher</p>
        <select id = "product-type" data-placeholder ="Choose product type">
            <option value ="dvd">DVD</option>
            <option value ="book">Book</option>
            <option value = "furniture">Furniture</option>
    </select>
</div>
    <?php
    $some = new Furniture();

    $some ->changeOption();
    ?>
</form>
<footer>
    <p>Scandiweb Test assignment</p>
</footer>
</body>
</html>