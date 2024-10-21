<?php

define('APP_PATH', __DIR__);

require_once __DIR__.'/vendor/autoload.php';

dd(APP_PATH);

$routes = require_once __DIR__ . '/config/routes.php';

$uri = $_SERVER['REQUEST_URI'];

$routes[$uri]();

// dd($_SERVER);