<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Main API Configuration
    |--------------------------------------------------------------------------
    |
    | This configuration handles the connection to the main project's API
    | for fetching application data in the public view.
    |
    */

    'main' => [
        'url' => env('MAIN_API_URL', 'https://pcapptrack-admin.tech/api'),
        'token' => env('MAIN_API_TOKEN'),
        'timeout' => env('MAIN_API_TIMEOUT', 30),
    ],

];