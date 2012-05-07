<?php

// START SESSIONS
session_start();

// APPLICATION SPECIFIC CONFIG SETTINGS
define('SITE_ROOT', dirname(__FILE__));
define('APP', 'default_app');
define('URL_BASE', '/');
define('DEFAULT_CONTROLLER', 'hello');
define('DEFAULT_SKIN', 'default');
define('ERROR_CONTROLLER', 'error');
define('DEFAULT_MAIN_TEMPLATE', 'main.template.php');

// LOAD MAIN INIT FILE
include(SITE_ROOT . '/system/core/init.php');

// GO
$router->route();

// Hello