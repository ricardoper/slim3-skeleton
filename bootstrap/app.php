<?php

use \App\Kernel\App;

require 'kernel.php';

session_start();

$settings = ['settings' => require config_path() . '/app.php'];

$app = new App($settings);

$app->registerServices();

require app_path() . '/Routes/app.php';

$app->run();
