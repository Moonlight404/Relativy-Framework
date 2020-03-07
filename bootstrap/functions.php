<?php
//Function view
function view($file){
    $isDir = filetype("../views/{$file}.php");
    $sucess = include("../views/{$file}.php");
    if($sucess){
        $sucess = true;
    } else{
        $dir = include("../views/{$file}/index.php");
        if($dir){
            $dir = true;
        } else{
        require "../app/404.php";
        }
    }
}   