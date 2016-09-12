<?php

use \App\Kernel\App;

require 'kernel.php';

session_start();

$app = new App(['settings' => require config_path() . '/app.php']);

$app->registerServices();

require app_path() . '/Routes/app.php';

$app->run();
