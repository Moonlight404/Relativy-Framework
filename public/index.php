<?php
/**
 * Relavify - A PHP Framework For Web
 *
 * @package  Relavify
 * @author   Alexandre Silva
 */
error_reporting(0);
ini_set(“display_errors”, 0 );
define('RELATIVY_START', microtime(true));
require('../app/routes_engine.php');
include('../bootstrap/autoload.php');
require('../routes/web.php');
require('../app/template.php');