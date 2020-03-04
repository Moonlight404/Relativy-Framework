<?php
//Function view
function view($file){
    $sucess = include("../views/{$file}.php");
    if($sucess){
        $sucess = true;
    } else{
        require "../app/404.php";
    }
}
// $url = $_SERVER['REQUEST_URI'];
// if($url === "/"){
//     view("welcome");
// }