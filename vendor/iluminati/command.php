<?php
/**
 * Relavify - A PHP Framework For Web
 *
 * @package  Relavify
 * @author   Alexandre Silva
 */
function iluminati($command){
    if($command == 1){
        makeFileRoute();
    } else{
        return alo("Comando não existe");
    }
}