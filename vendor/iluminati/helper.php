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

function removeTexto($msg){
    $msg = str_replace(' ', '', $msg);
    $msg = str_replace("> <", "><", $msg);
    $msg = str_replace("&nbsp;"," ",$msg);
    $msg = str_replace("\n", "", $msg);
    $msg = str_replace("\r", "", $msg);
    $msg = preg_replace('/\s/',' ',$msg);
    return $msg;
}

function makeFileRoute(){
    $str = file_get_contents('env.json');
    $json = json_decode($str, true);
    $port = $json['port'];
    $os = $json['os'];
    echo alo("Escolha a rota\n");
    echo "http://localhost:$port/";
    $url = fopen ("php://stdin","r");
    $link = fgets($url);
    $link = removeTexto($link);
    $myFile = "views/$link.php";
    $handle = fopen($myFile, 'w') or die('Cannot open file:  '.$myFile); //implicitly creates file
    $editTemplate = fopen($myFile, 'w') or die('Cannot open file:  '.$myFile);
    $data = template($link);
    fwrite($editTemplate, $data);
    if($os === "linux"){
        system('clear');
    } else{
        system('cls');;
    }
    echo alo("Rota criada com sucesso, código fica em $myFile\nPra acessar ela use http://localhost:$port/$link");
}