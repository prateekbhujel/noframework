<?php

return [
    'driver' => env('DB_DRIVER'),
    'mysql' => [
        'driver' => 'mysql',
        'host' => env('DB_HOST'),
        'database' => env('DB_DATABASE'),
        'username' => env('DB_USERNAME'),
        'password' => env('DB_PASSWORD'),
        // 'charset' => 'utf8', => Doesnt work with PHPMYADMIN : Default - handles it.
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
    ],
];