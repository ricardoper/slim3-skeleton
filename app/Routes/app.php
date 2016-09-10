<?php

$app->get('/', 'App\Controllers\HomeController:index');

$app->get('/hello/{name}', 'App\Controllers\HelloController:index');
