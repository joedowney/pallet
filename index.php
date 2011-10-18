<?php

// APPLICATION CONFIG SETTINGS
define('SITE_ROOT', realpath(dirname(__FILE__)));
define('APP', 'default_app');
define('URL_BASE', '/');
define('DEFAULT_CONTROLLER', 'hello');
define('DEFAULT_SKIN', 'default');
define('ERROR_CONTROLLER', 'error');
define('DEFAULT_MAIN_TEMPLATE', 'main.template.php');

// START SESSIONS
session_start();

// LOAD MAIN INIT FILE
include(SITE_ROOT . '/system/core/init.php');

// ADD DB
// load_core('db');

go();