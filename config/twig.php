<?php

return [
    'debug' => env('APP_DEBUG', false),
    'auto_reload' => env('APP_DEBUG', false),
    'cache' => storage_path() . '/cache/twig',
    'strict_variables' => env('APP_DEBUG', false),
];
