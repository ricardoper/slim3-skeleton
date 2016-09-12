<?php

return [
    'displayErrorDetails' => env('APP_DEBUG', false),
    'determineRouteBeforeAppMiddleware' => false,
    // 'routerCacheFile' => storage_path() . '/cache/routes.php',

    'services' => require 'services.php',

    'logger' => require 'logger.php',

    'twig' => require 'twig.php',
];
