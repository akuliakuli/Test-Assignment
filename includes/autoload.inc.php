<?php

spl_autoload_register("myAutoLoad");


function myAutoLoad($classname){
    $folder = "classes/";
    $ext = ".class.php";
    $fullpath = $folder . $classname . $ext;
    include_once $fullpath;
}