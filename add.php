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
        <select id = "product-type">
            <option value ="dvd">DVD</option>
            <option value ="book">Book</option>
            <option value = "furniture">Furniture</option>
    </select>
</div>
<div class ="dvd">
    <div class ="option">
    <p>SIZE(MB)</p>
        <input type ="text" placeholder="#size" id = "size">
    </div>
    <p class ="text">Please Provide product SIZE</p>
    </div>
</div>
<div class ="book">
    <div class ="option">
     <p>WEIGHT(CM)</p>
     <input type ="text" placeholder="#weight" id = "weight">
     </div>
     <p class ="text">Please Provide product WEIGHT';
</div>
<div class ="furniture">
    <div class = "option">
    <p>HEIGHT(CM)</p>
        <input type ="text" placeholder="#height" id = "height">
        </div>
        <p class ="text">Please Provide product HEIGHT</p>
        <div class ="option">
        <p>WIDTH(CM)</p>
        <input type ="text" placeholder="#width" id = "width">
        </div>
        <p class ="text">Please Provide product WIDTH</p>
        <div class ="option">
        <p>LENGHT(CM)</p>
        <input type ="text" placeholder="#length" id = "length">
        </div>
        <p class ="text">Please Provide product LENGTH</p>'
    </div>
    </form>

<footer>
    <p>Scandiweb Test assignment</p>
</footer>
</body>
</html>