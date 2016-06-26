<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
<<<<<<< HEAD
        'key' => env('SES_KEY'),
=======
        'key'    => env('SES_KEY'),
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

<<<<<<< HEAD
    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
=======
    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
>>>>>>> b42fe0a4023e6bfa51529d0b73428b5c4d70e5e8
        'secret' => env('STRIPE_SECRET'),
    ],

];
