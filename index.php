<?php

date_default_timezone_set('UTC');

require_once __DIR__ . '/vendor/autoload.php';
// include config
include './config/dev.php';

use Message\Routing\Routing;

$result = Routing::dispatch($_SERVER['PATH_INFO']);

if ($result === false) {
    include './templates/message/index.html';
}



