<?php

namespace Jano\Structural\Decorator;

use Jano\Structural\Decorator\Contracts\SubscriptionContract;

class Subscription implements SubscriptionContract
{
    protected $price = 10;
    public function price(): int
    {
        return $this->price;
    }

    public function description(): string
    {
        return 'Basic Plan';
    }
}
