<?php

declare(strict_types=1);

return [

    'provider' => env('BILLER_PROVIDER', 'paystack'),

    'key' => env('BILLER_PROVIDER_PUBLIC_KEY'),

    'secret' => env('BILLER_PROVIDER_SECRET'),

    'middlewares' => ['auth'],

    'webhooks' => [

        'events' => []

    ]

];
