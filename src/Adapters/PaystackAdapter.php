<?php

declare(strict_types=1);

namespace  Grep\Biller\Adapters;

use Grep\Biller\Client;
use Grep\Biller\Contracts\PaymentAdapter;

class PaystackAdapter implements PaymentAdapter
{
    public function __construct(protected Client $client)
    {
    }
}
