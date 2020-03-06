#!/usr/bin/env php
<?php
/**
 * Relavify - A PHP Framework For Web
 *
 * @package  Relavify
 * @author   Alexandre Silva
 */
define('relativy', microtime(true));

require 'vendor/autoload.php';

function command(){
    echo "Qual comando queres executar?\n";
    for($i = 0; $i < 1; $i++){
        echo "1- Criar uma rota\n";
    }
    echo "Escolha um comando: ";
    $resposta = fopen ("php://stdin","r");
    $line = fgets($resposta);
    echo iluminati($line);
}

command();