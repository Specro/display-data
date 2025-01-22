<?php

require_once __DIR__ . '/autoloader.php';
require_once __DIR__ . '/config.php';

use DataDisplay\App;

$app = new App($config);
$app->run();
