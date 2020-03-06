<?php
/**
 * Relavify - A PHP Framework For Web
 *
 * @package  Relavify
 * @author   Alexandre Silva
 */
 $str = file_get_contents('env.json');
 $json = json_decode($str, true);
 $port = $json['port'];
 $exec = "cd public && php -S localhost:$port && cls && clear";
 echo "Aguarde um momento";
 echo "\nServer iniciado com sucesso\n Acesse usando http://127.0.0.1:$port\n Logs: ";
 $server = shell_exec($exec);