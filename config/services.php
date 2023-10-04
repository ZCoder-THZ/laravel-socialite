<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET_KEY'),
        'redirect' => 'http://localhost:9000/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET_KEY'),
        'redirect' => 'http://localhost:9000/auth/callback',
    ],

// GOOGLE_CLIENT_ID=586422120572-ru483n3t20cc0k1b9p3ugc2uhtpraah4.apps.googleusercontent.com
// GOOGLE_CLIENT_SECRET_KEY=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

// FACEBOOK_CLIENT_SECRET_KEY=3436c586748226f84beba024d0d2576b
// FACEBOOK_CLIENT_ID=719471606687195
];
