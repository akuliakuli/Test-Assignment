<?php
abstract class Option{
    abstract function changeOption();
}

class DVD extends Option{
    public function changeOption(){
        echo '<div class ="input-menu">
        <p>SIZE(MB)</p>
        <input type ="text" placeholder="#size" id = "size">
    </div>
    <p class ="text">Please Provide product SIZE</p>';
    }
}

class Book extends Option{
    public function changeOption(){
    echo '<div class ="input-menu">
         <p>WEIGHT(CM)</p>
         <input type ="text" placeholder="#weight" id = "weight">
         </div>
         <p class ="text">Please Provide product WEIGHT';
    }
}
class Furniture extends Option{
    public function changeOption(){
echo '<div class ="input-menu">
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
        <p class ="text">Please Provide product LENGTH</p>';
    }
}
class Choice{
    public function create($obj){
        $obj = new $obj();
        $obj -> changeOption();
    }
}