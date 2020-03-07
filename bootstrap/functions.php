<?php
/**
 * Relavify - A PHP Framework For Web
 *
 * @package  Relavify
 * @author   Alexandre Silva
 */
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

require ("framework.php");

function css(){
    $str = file_get_contents('../env.json');
    $json = json_decode($str, true);
    $framework = $json['framework'];
    echo frameworkCSS($framework);
}

function js(){
    $str = file_get_contents('../env.json');
    $json = json_decode($str, true);
    $framework = $json['framework'];
    echo frameworkJS($framework);
}