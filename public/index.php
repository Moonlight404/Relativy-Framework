<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
//Routes engine
require('../app/routes_engine.php');
//Autoload
include('../bootstrap/autoload.php');

require('../routes/web.php');

require('../app/template.php');