<?php

// LOAD CONFIG FILE
include(SITE_ROOT . '/config.php');

// LOAD FUNCTIONS
include(SITE_ROOT . '/system/core/functions.php');

// LOAD CORE CLASSES
load_core('input');
load_core('registry');
load_core('router');

function go()
{
    $router = load_core('router');
    $router->route();
}