<?php

return [
    'core' => storage_path('/wordpress'),
    'debug' => env('APP_DEBUG'),
    'url'   => [
        'backend'        => rtrim(env('APP_BACKEND_URL'), '/'),
        'site'           => rtrim(env('APP_URL'), '/'),
        'backend_prefix' => trim(parse_url(env('APP_BACKEND_URL'), PHP_URL_PATH), '/').'/',
        'site_prefix'    => trim(parse_url(env('APP_URL'), PHP_URL_PATH), '/').'/',
    ],

    'auth' => [
        'key'         => env('WP_AUTH_KEY'),
        'salt'        => env('WP_AUTH_SALT'),
        'secure' => [
            'key'  => env('WP_SECURE_AUTH_KEY'),
            'salt' => env('WP_SECURE_AUTH_SALT'),
        ],
        'loggedIn' => [
            'key'  => env('WP_LOGGED_IN_KEY'),
            'salt' => env('WP_LOGGED_IN_SALT'),
        ],
    ],

    'noce' => [
        'key'  => env('WP_NONCE_KEY'),
        'salt' => env('WP_NONCE_SALT'),
    ],
];