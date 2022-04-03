<?php
    include  "includes/autoload.inc.php";
    $a = new View();
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
                  <button onclick="location.href ='add.php'" type ="button">ADD</button>
                  <button>MASS DELETE</button>    
            </div>
    </header>
<main>
    <?php 
        $a->showItems(0);
    ?>
</main>
<footer>
    <p>Scandiweb Test assignment</p>
</footer>
<script defer src ="script.js"></script>
</body>
</html>