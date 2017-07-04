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
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => SocialSoc\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
	'facebook' => [
		'client_id' => '258519507934043',
		'client_secret' => '9bf1798ff0810962c9ac9df6604155e0',
		'redirect' => 'http://localhost:8000/callback/facebook',
	],
	'google' => [
		'client_id' => '256752393349-asjcmksg4ct0og2sal87hht11gtq4hal.apps.googleusercontent.com',
		'client_secret' => 'TqAQuyzTSNYjDCBut8_MaQRp',
		'redirect' => 'http://localhost:8000/callback/google',
	],

];
