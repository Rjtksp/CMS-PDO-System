<?php

// include autoloader
require_once "autoloader.php";

// start session
session_start();

// include the main configuration file
require_once "config/config.php";

// load database
// require_once "classes/Database.php";

// include helper functions
require_once "helpers.php";

// define global constant
define("APP_NAME", "CMS PDO System");
define("PROJECT_DIR", "cms-pdo");

?>
