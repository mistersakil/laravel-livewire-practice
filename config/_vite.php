<?php

return [
    'configs' => [
        'default' => [
            'entrypoints' => [
                'paths' => [
                    'resources/css/app.css',
                    'resources/js/app.js'
                ],
            ],
            'dev_server' => [
                'url' => env('DEV_SERVER_URL', 'http://localhost:3000'),
            ],
            'heartbeat_checker' => function ($http, $method) {
                return ['code' => 200];
            }

        ],
    ],
];
