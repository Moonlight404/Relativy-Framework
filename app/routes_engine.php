<?php
function route($link, $file){
    $ht = fopen("../public/.htaccess","a");
    fwrite($ht, "RewriteRule ^$link ./views/$file.php [L]\n");
}

function clear(){
    $ht = fopen("../public/.htaccess","w");
    //open file to write
    // clear content to 0 bits
    ftruncate($ht, 0);
    //close file
}

function rewrite(){
    $ht = fopen("../public/.htaccess","a");
    fwrite($ht, "RewriteEngine on\n");
}

function start(){
    clear();
    rewrite();
}

start();