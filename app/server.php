<?php
function serverInit(){
    $str = file_get_contents('env.json');
    $json = json_decode($str, true);
    $port = $json['port'];
    $exec = "cd public && php -S localhost:$port && cls && clear";
    echo "Aguarde um momento";
    echo "\nServer iniciado com sucesso\n Acesse usando http://localhost:$port\n Logs: ";
    $server = shell_exec($exec);
}