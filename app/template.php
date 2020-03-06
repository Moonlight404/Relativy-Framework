<?php
/**
 * Relavify - A PHP Framework For Web
 *
 * @package  Relavify
 * @author   Alexandre Silva
 */
$url = $_SERVER['REQUEST_URI'];
if($url === "/"){
    view("welcome");
} else{
    view($url);
}