<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],
    'facebook' => [
        'client_id' => "475002973042012",
        'client_secret' => "2f8e1a4ee654c7783716b29c0ab5f6e9",
        'redirect' => env('APP_URL').'/login/facebook/callback',
    ],
    'google' => [
        'client_id' => "834994240887-4mioe25b8ntbfs6rfgarvaregjlejulu.apps.googleusercontent.com",
        'client_secret' => "1A9JXuJ964hNbSzuWfx8mJ4P",
        // 'redirect' => 'http://127.0.0.1:8000/login/google/callback',
        'redirect' => env('APP_URL').'/login/google/callback',
    ],

];
