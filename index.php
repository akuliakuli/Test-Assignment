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
    <header>
            <p>Product List</p>
            <div class ="buttons">
                  <button onclick="location.href ='add.html'" type ="button">ADD</button>
                  <button>MASS DELETE</button>    
            </div>
    </header>
<main>
    <div class ="item">
        <input type ="checkbox" class ="delete-checkbox">
            <div class ="item-menu">
                <h1><?php $some = new View();
                    $some ->showItems("ikea chair");
                ?></h1>
                <h1>IKEA CHAIR</h1>
                <h1>245-45-l45</h1>
                <h1>50$</h1>
        </div>
    </div>
    <div class ="item">
        <input type ="checkbox" class ="delete-checkbox">
            <div class ="item-menu">
                <h1>TRTRTRTRTR</h1>
                <h1>Lorem ipsum, dolor sit </h1>
                <h1>Lorem ipsum dolor sit amet.</h1>
                <h1>lorem</h1>
        </div>
    </div>
    <div class ="item">
        <input type ="checkbox">
            <div class ="item-menu" class ="delete-checkbox">
                <h1>SKU-SKU-SKU-TR</h1>
                <h1>IKEA CHAIR</h1>
                <h1>245-45-l45</h1>
                <h1>50$</h1>
        </div>
    </div>
</main>
<footer>
    <p>Scandiweb Test assignment</p>
</footer>

</body>
</html>