<?php
    include  "includes/autoload.inc.php";
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

<header>
    <p>Product Add</p>
    <div class ="buttons">
        <button onclick="location.href ='index.php'" type ="button" >SAVE</button>
        <button>CANCEL</button>    
</div>
</header>
<form id = "product-form" method ="POST" action = "add.php">
    <div class ="input-menu">
       <p>SKU</p>
       <input type ="text" placeholder="#sku" id = "sku">
</div>
    <div class ="input-menu">
        <p>Name</p>
        <input type ="text" placeholder="#name" id = "name">
    </div>
<div class ="input-menu">
    <p>Price</p>
    <input type ="text" placeholder="#price" id = "price">
</div>
    <div class ="input-menu">
        <p>Type Switcher</p>
            <select id = "product-type" data-placeholder ="Choose product type">
                <option>DVD</option>
                <option>Book</option>
                <option>Furniture</option>
            </select>
        </div>
    <div class ="input-menu">
        <p>SIZE(MB)</p>
        <input type ="text" placeholder="#size" id = "size">
    </div>
    <p class ="text">Please Provide product SIZE</p>
    <div class ="input-menu">
        <p>HEIGHT(CM)</p>
        <input type ="text" placeholder="#height" id = "height">
    </div>
    <p class ="text">Please Provide product HEIGHT</p>
    <div class ="input-menu">
        <p>WIDTH(CM)</p>
        <input type ="text" placeholder="#width" id = "width">
    </div>
    <p class ="text">Please Provide product WIDTH</p>
    <div class ="input-menu">
        <p>LENGHT(CM)</p>
        <input type ="text" placeholder="#length" id = "length">
    </div>
    <p class ="text">Please Provide product LENGTH</p>
    <div class ="input-menu">
        <p>WEIGHT(CM)</p>
        <input type ="text" placeholder="#weight" id = "weight">
    </div>
     <p class ="text">Please Provide product WEIGHT</p>
</form>
<footer>
    <p>Scandiweb Test assignment</p>
</footer>
</body>
</html>