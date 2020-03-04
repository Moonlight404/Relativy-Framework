<?php
//Function view
function view($file){
    include("../views/{$file}.php");
}
// $url = $_SERVER['REQUEST_URI'];
// if($url === "/"){
//     view("welcome");
// }