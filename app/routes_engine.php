<?php
function route($link, $file){
    if($link === "/"){
        view($file);
    }else{
    $ht = fopen("./.htaccess","a");
    fwrite($ht, "RewriteRule ^$link /views/$file.php [L]\n");
    }
}

function clear(){
    $ht = fopen("./.htaccess","w");
    //open file to write
    // clear content to 0 bits
    ftruncate($ht, 0);
    //close file
}

function rewrite(){
    $ht = fopen("./.htaccess","a");
    fwrite($ht, "RewriteEngine on\n");
}

function start(){
    clear();
    rewrite();
}

start();