<?php
$url = $_SERVER['REQUEST_URI'];
if($url === "/"){
    view("welcome");
} else{
    view($url);
}