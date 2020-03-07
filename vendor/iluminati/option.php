<?php
function command(){
    echo "Qual comando queres executar?\n";
    echo "1- Criar uma rota\n";
    echo "Escolha um comando: ";
    $resposta = fopen ("php://stdin","r");
    $line = fgets($resposta);
    echo iluminati($line);
}