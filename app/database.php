<?php
$str = file_get_contents('../env.json');
$json = json_decode($str, true);
$type = $json['db'];

if($type == "mysql"){
    $dbh = new PDO('mysql:host='.$json["mysql"]["host"].';dbname='.$json["mysql"]["db"],$json["mysql"]["user"], $json["mysql"]["password"]);
    if($dbh){
        $dbConf = true;
    } else{
        require("../app/errorDb.php");
    }
}