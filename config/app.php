<?php

return [
    'displayErrorDetails' => true,
    'determineRouteBeforeAppMiddleware' => false,
    // 'routerCacheFile' => storage_path() . '/cache/routes.php',

    'services' => require 'services.php',

    'twig' => require 'twig.php',
];
