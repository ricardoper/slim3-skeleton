<?php

$app->get('/', 'App\Controllers\Demo\HomeController:index');

$app->get('/hello/{name}', 'App\Controllers\Demo\HelloController:index');
