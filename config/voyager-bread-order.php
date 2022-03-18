<?php

return [

    /*
     * If enabled for voyager-bread-order package.
     */
    'enabled' => env('VOYAGER_BREAD_ORDER_ENABLED', true),

    /*
     * The config_key for voyager-bread-order package.
     */
    'config_key' => env('VOYAGER_BREAD_ORDER_CONFIG_KEY', 'joy-voyager-bread-order'),

    /*
     * The route_prefix for voyager-bread-order package.
     */
    'route_prefix' => env('VOYAGER_BREAD_ORDER_ROUTE_PREFIX', 'joy-voyager-bread-order'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadOrder\\Http\\Controllers',
    ],
];
