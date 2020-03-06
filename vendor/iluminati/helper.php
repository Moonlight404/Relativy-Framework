<?php
/**
 * Relavify - A PHP Framework For Web
 *
 * @package  Relavify
 * @author   Alexandre Silva
 */

function alo($message){
    return $message."\n";
}

function makeFileRoute(){
    $str = file_get_contents('env.json');
    $json = json_decode($str, true);
    $port = $json['port'];
    echo alo("Escolha a rota\n");
    echo "http://localhost:$port/";
    $url = fopen ("php://stdin","r");
    $link = fgets($url);
    $myFile = "views/$link.php";
    $handle = fopen($myFile, 'w') or die('Cannot open file:  '.$myFile); //implicitly creates file
    $editTemplate = fopen($myFile, 'w') or die('Cannot open file:  '.$myFile);
    $data = template($link);
    fwrite($editTemplate, $data);
    echo alo("Rota criada com sucesso, basta acessar em $myFile");
}