<?php
return [
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,

        // View settings
        'view' => [
            'template_path' => __DIR__ . '/../Views',
            'twig' => [
                'cache' => __DIR__ . '/../../cache/twig',
                'debug' => true,
                'auto_reload' => true,
            ],
        ],

        // monolog settings
        'logger' => [
            'name' => 'personal',
            'path' => __DIR__ . '/../../log/app.log',
        ],
    ],
];
