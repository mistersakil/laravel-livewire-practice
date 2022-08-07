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
            "interfaces" => [
                "heartbeat_checker" => "Innocenzi\\Vite\\HeartbeatCheckers\\HttpHeartbeatChecker"
            ],

        ],
    ],
];
